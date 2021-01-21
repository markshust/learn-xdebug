<?php

namespace App\Http\Livewire;

use App\Http\Articles\Articles;
use Livewire\Component;

class Links extends Component
{
    public $showFilter = false;

    public $os = null;

    public $hosting = null;

    public $ide = null;

    public $groupedLinks;

    public function render()
    {
        $this->groupedLinks = (new Articles)->all($this->os, $this->hosting, $this->ide);

        return view('livewire.links');
    }

    public function show()
    {
        $this->showFilter = true;
    }

    public function hide()
    {
        $this->showFilter = false;
    }
}
