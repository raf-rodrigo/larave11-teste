<?php

namespace App\Livewire;

use App\Models\RegisterMember;
use Livewire\Component;
use Livewire\WithPagination;

class ViewMember extends Component
{
    use WithPagination;


    public $search = '';

    public function delete()
    {
        dd('aqui');
    }

    public function render()
    {
        return view('livewire.view-member', [
            'contents' => RegisterMember::all()->toArray(),
        ]);
    }
}
