<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Postnewjob extends Component
{

    public $steps = [];
   

    public function increament()
    {
        $this->steps[] = count($this->steps) + 1;
    }

    public function remove($index)
    {

        unset($this->steps[$index]);
        array_values($this->steps);

    }


    public function render()
    {
        return view('livewire.postnewjob');
    }
}
