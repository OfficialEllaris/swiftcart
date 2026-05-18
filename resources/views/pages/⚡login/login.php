<?php

use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

new class extends Component {

    #[Validate('required|email|max:255')]
    public ?string $email_address = "";

    #[Validate('required|string|min:8')]
    public ?string $password = "";

    public function login(): void
    {
        $this->validate();

        $credentials = [
            'email_address' => $this->email_address,
            'password' => $this->password,
        ];

        if (Auth::attempt($credentials)) {
            session()->regenerate();
            $this->redirect(route('dashboard'), navigate: true);
        }

        session()->flash('feedback', [
            'message' => 'These credentials do not match our records.',
            'type' => 'success',
        ]);
    }

};