<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\User;

class Livesearch extends Component
{
    public $search = null;

    public function render()
    {

        if($this->search == null){
            $users = [];
        }
        else{
            $users = User::where('name','like','%'.$this->search.'%')->get();
        }
        
        return view('livewire.livesearch', [
            'users' => $users,
        ]);
    }
}
