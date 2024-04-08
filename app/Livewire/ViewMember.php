<?php

namespace App\Livewire;

use App\Models\RegisterMember;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class ViewMember extends Component
{
    use Actions;
    use WithPagination;


    public $search = '';

    public function delete(int $id): void
    {
        RegisterMember::find($id)->delete();
        $this->notification()->info(
            $title = 'Sócio excluído',
            $description = 'Sócio excluído com sucesso.',
        );
        $this->render();
    }


    public function render()
    {
        return view('livewire.view-member', [
            'contents' => RegisterMember::all()->toArray(),
        ]);
    }
}
