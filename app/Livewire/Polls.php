<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class Polls extends Component
{
    #[On('poll-created')]
    public function render()
    {
        $polls = \App\Models\Poll::with('options.votes')->latest()->get();
        return view('livewire.polls', ['polls' => $polls]);
    }
}
