<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Empresa;
use Illuminate\Support\Facades\Http;

class SearchCnpj extends Component
{
    protected array $rules = [
        'cnpj' => ['required'],
        'razao_social' => ['required'],
        'nome_fantasia' => ['required'],
        'descricao_situacao_cadastral' => ['required'],
        'cnae_fiscal_descricao' => ['required']
    ];
    protected array $messages = [
        'cnpj.required' => 'O campo CNPJ é obrigatório.',
        'razao_social.required' => 'O campo RAZÃO SOCIAL é obrigatório.',
        'nome_fantasia.required' => 'O campo NOME FANTASIA é obrigatório.',
        'descricao_situacao_cadastral.required' => 'O campo SITUAÇÃO é obrigatório.',
        'cnae_fiscal_descricao.required' => 'O campo DESCRIÇÃO é obrigatório.',
    ];

    public string $cnpj = '';
    public string $razao_social = '';
    public string $nome_fantasia = '';
    public string $descricao_situacao_cadastral = '';
    public string $cnae_fiscal_descricao = '';

    public array $empresa = [];

    public function updatedCnpj(string $value) {
        $response = Http::get("https://brasilapi.com.br/api/cnpj/v1/{$value}")->json();

        $this->cnpj = $response['cnpj'];
        $this->razao_social = $response['razao_social'];
        $this->nome_fantasia = $response['nome_fantasia'];
        $this->descricao_situacao_cadastral = $response['descricao_situacao_cadastral'];
        $this->cnae_fiscal_descricao = $response['cnae_fiscal_descricao'];
    }

    public function save() {
        $this->validate();

        Empresa::updateOrCreate(
            [
                'cnpj' => $this->cnpj,
            ],
            [
                'razao_social' => $this->razao_social,
                'nome_fantasia' => $this->nome_fantasia,
                'descricao_situacao_cadastral' => $this->descricao_situacao_cadastral,
                'cnae_fiscal_descricao' => $this->cnae_fiscal_descricao,
            ]);
        
            $this->render();

            $this->resetExcept('empresa');
    }

    public function edit(string $id) {
        $empresa = Empresa::find($id);

        $this->cnpj = $empresa->cnpj;
        $this->razao_social = $empresa->razao_social;
        $this->nome_fantasia = $empresa->nome_fantasia;
        $this->descricao_situacao_cadastral = $empresa->descricao_situacao_cadastral;
        $this->cnae_fiscal_descricao = $empresa->cnae_fiscal_descricao;
    }

    public function remove(string $id) {
        $empresa = Empresa::find($id);
        $empresa?->delete();

        $this->render();
    }

    public function render()
    {
        $this->empresa = Empresa::all()->toArray();

        return view('livewire.search-cnpj');
    }
}
