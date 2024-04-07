<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Livewire\Component;
use App\Models\RegisterMember;

class RegisterMemberLivewire extends Component
{

    public int $userId;

    public string $name = '';
    public string $email = '';
    public string $cellphone = '';
    public string $status = '';
    public string $zipcode = '';
    public string $address = '';
    public string $addressNumber = '';
    public string $addressComplement = '';
    public string $neighborhood = '';
    public string $city = '';
    public string $state = '';


    public function updatedZipcode(string $value): void
    {
        $this->zipcode = preg_replace("/[^0-9]/", "", $value);

        $response = Http::get("https://viacep.com.br/ws/{$this->zipcode}/json/")->json();

        $this->zipcode = $response['cep'];
        $this->address = $response['logradouro'];
        $this->neighborhood = $response['bairro'];
        $this->city = $response['localidade'];
        $this->state = $response['uf'];
    }

    public function render()
    {
        return view('livewire.register-member-livewire');
    }
}
