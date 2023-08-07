<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use Livewire\Component;

class SubscriberComponent extends Component
{
    #[Rule('required|email|min:5', message: 'You need to provide the email')]
    public $email = '';

    public function subscribe()
    {
        $this->validate();
    }

    public function render()
    {
        return view('livewire.subscriber-component');
    }
}
