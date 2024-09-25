<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use App\Models\State;
use App\Models\City;
use App\Models\Address;

class FormAddresses extends Component

{
    public $cep, $estadoSelecionado, $municipioSelecionado, $rua;
    public $estados = [];
    public $municipios = [];

    public function mount()
    {
        // Carregar estados do banco ou API
        $this->estados = State::all();
    }

    public function updatedCep()
    {
        $response = Http::get("https://viacep.com.br/ws/{$this->cep}/json/");
        if ($response->successful()) {
            $data = $response->json();
            $this->rua = $data['logradouro'];
            $this->estadoSelecionado = $data['uf'];
            $this->municipioSelecionado = $data['localidade'];

            // Carregar municípios se o estado não estiver no banco
            $this->loadMunicipios();
        }
    }

    public function loadMunicipios()
    {
        if ($this->estadoSelecionado) {
            $this->municipios = City::where('state_id', State::where('sigla', $this->estadoSelecionado)->first()->id)->get();
        }
    }

    public function salvar()
    {
        // Salvar estado
        $estado = State::firstOrCreate(['sigla' => $this->estadoSelecionado, 'nome' => $this->estadoSelecionado]);

        // Salvar cidade
        $cidade = City::firstOrCreate(['nome' => $this->municipioSelecionado, 'state_id' => $estado->id]);

        // Salvar endereço
        Address::create(['rua' => $this->rua, 'cep' => $this->cep, 'city_id' => $cidade->id]);

        // Resetar campos
        $this->reset(['cep', 'rua', 'estadoSelecionado', 'municipioSelecionado']);
        $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => 'Endereço salvo com sucesso!']);
    }

    public function render()
    {
        return view('livewire.form-addresses');
    }
}
