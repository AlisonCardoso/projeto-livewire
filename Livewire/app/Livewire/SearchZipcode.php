<?php

namespace App\Livewire;

use GuzzleHttp\Exception\GuzzleException;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\Address;
use function Pest\Laravel\get;



class SearchZipcode extends Component
{
   
    
    public string $zipcode = '';
    public string $street = '';
    public string $neighborhood = '';
    public string $city = '';
    public string $state = '';

    public function buscar (Request $request) 
    {
        $cep = $request->input('cep');
        // dd($cep);
        $response = Http::get("viacep.com.br/ws/$cep/json/")->json();

        

        
         
    }



    public function updatedZipcode(string $value)
    {
    
    $client = new Client([ 'verify' => false,]);
     $response = $client->request('GET', "https://viacep.com.br/ws/{$value}/json/");
     $data = json_decode($response->getBody()->getContents(), true);

     $this->street = $data['logradouro'];
     $this->neighborhood = $data['bairro'];
     $this->city = $data['localidade'];
     $this->state = $data['uf'];
     }

    
    public function render()
    {
        return view('livewire.search-zipcode');
    }
}
