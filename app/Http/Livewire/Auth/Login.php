<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    /** @var string */
    public $email = '';

    /** @var string */
    public $password = '';

    /** @var bool */
    public $remember = false;

    protected $rules = [
        'email' => ['required', 'email'],
        'password' => ['required'],
    ];

    public function authenticate()
    {
        $this->validate();

        if (!Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            $this->addError('email', trans('auth.failed'));
            return;
        }

        $user = auth()->user();

        if ($user->is_guardian) {
            return redirect()->intended(route('dashboard.index'));
        }

        if ($user->is_employee) {
            return redirect()->intended(route('admin.index'));
        }
    }

    public function render()
    {
        return view('livewire.auth.login')->extends('layouts.auth');
    }
}
