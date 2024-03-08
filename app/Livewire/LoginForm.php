<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;


use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LoginForm extends Component
{
    #[Validate('required'), Validate('email')]
    public string $email;

    #[Validate('required')]
    public string $password;

    public bool $remember;

    public function submit()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            request()->session()->regenerate();
            return redirect()->intended()->route('dashboard');
        }

        return back()->withErrors([
            'email' => 'Les identifiants fournis ne correspondent pas à nos dossiers.',
        ])->onlyInput('email');
    }
    public function render()
    {
        return view('livewire.login-form');
    }
}
