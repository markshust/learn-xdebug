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
        $allArticles = (new Articles)->all();

        if ($this->os) {
            $allArticles = $allArticles->filter(fn ($link) => $link['os'] == $this->os);
        }

        if ($this->hosting) {
            $allArticles = $allArticles->filter(fn ($link) => $link['hosting'] == $this->hosting);
        }

        if ($this->ide) {
            $allArticles = $allArticles->filter(fn ($link) => $link['ide'] == $this->ide);
        }

        $this->groupedLinks = $allArticles->groupBy('category')->toArray();

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
