<?php

namespace App\Livewire;

use GuzzleHttp\Exception\GuzzleException;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Address;
use function Pest\Laravel\get;



class SearchZipcode extends Component
{
   
    
    public string $zipcode = '';
    public string $street = '';
    public string $neighborhood = '';
    public string $city = '';
    public string $state = '';

    



    public function updatedZipcode(string $value)
    {
    
        $response = Http::get("viacep.com.br/ws/{$value}/json/")->json();
        dd($response);
 
     
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
