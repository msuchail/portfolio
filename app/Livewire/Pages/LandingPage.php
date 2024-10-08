<?php

namespace App\Livewire\Pages;

use App\Livewire\Auth\Passwords\Confirm;
use App\Mail\Confirmation;
use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;

class LandingPage extends Component
{
    #[Validate('required', 'in:M,F')]
    public string $civility = 'M';
    #[Validate('required|string|max:50|alpha')]
    public string $lastname = '';

    #[Validate('required|string|max:50|alpha')]
    public string $firstname = '';
    #[Validate('required|string|max:50')]
    public string $company = '';

    #[Validate('required|email')]
    public string $email = '';

    #[Validate('required||max:50')]
    public string $phone = '';

    #[Validate('required|string|max:500')]
    public string $message = '';


    public function render(): View
    {
        return view('livewire.pages.landing-page');
    }

    public function sendMessage(): void
    {
        $this->validate();
        Mail::send(new Contact(collect($this)));
        Mail::send(new Confirmation(collect($this)));
        $this->dispatch("email-sent");
    }
}
