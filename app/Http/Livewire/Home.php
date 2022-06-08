<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Olahraga;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home', [
            'olahragas' => Olahraga::all()
        ]);
    }
}
