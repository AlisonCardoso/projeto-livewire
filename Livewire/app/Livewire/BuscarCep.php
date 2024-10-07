<?php

namespace App\Livewire;

use App\Models\Endereco;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class BuscarCep extends Component
{
    protected array $rules = [
        'cep' => ['required'],
        'state' => ['required'],
        'city' => ['required'],
        'neighborhood' => ['required'],
        'street' => ['required']
    ];
    protected array $messages = [
        'cep.required' => 'O campo CEP é obrigatório.',
        'state.required' => 'O campo ESTADO é obrigatório.',
        'city.required' => 'O campo CIDADE é obrigatório.',
        'neighborhood.required' => 'O campo BAIRRO é obrigatório.',
        'street.required' => 'O campo RUA é obrigatório.',
    ];

    public string $cep = '';
    public string $state = '';
    public string $city = '';
    public string $neighborhood = '';
    public string $street = '';

    public array $endereco = [];

    public function updatedCep (string $value) {
       // $response = Http::get("https://brasilapi.com.br/api/cep/v1/{$value}")->json();
       $response = Http::withOptions(['verify' => false])->get("https://brasilapi.com.br/api/cep/v1/{$value}")->json();

        $this->cep = $response['cep'];
        $this->state = $response['state'];
        $this->city = $response['city'];
        $this->neighborhood = $response['neighborhood'];
        $this->street = $response['street'];

    }

    public function save() {
        $this->validate();

        Endereco::updateOrCreate(
            [
                'cep' => $this->cep,
            ],
            [
                'state' => $this->state,
                'city' => $this->city,
                'neighborhood' => $this->neighborhood,
                'street' => $this->street
            ]);

        $this->render();
        
        $this->resetExcept('endereco');
    }

    public function edit(string $id) {
        $endereco = Endereco::find($id);

        $this->cep = $endereco->cep;
        $this->state = $endereco->state;
        $this->city = $endereco->city;
        $this->neighborhood = $endereco->neighborhood;
        $this->street = $endereco->street;
    }

    public function remove(string $id) {
        $endereco = Endereco::find($id);
        $endereco?->delete();

        $this->render();
    }

    public function render()
    {
        $this->endereco = Endereco::all()->toArray();

        return view('livewire.buscar-cep');
    }
}
