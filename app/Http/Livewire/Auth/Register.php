<?php

namespace App\Http\Livewire\Auth;

use App\Models\Guardian;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $firstname = '';
    public $lastname = '';
    public $street = '';
    public $street_number = '';
    public $postcode = '';
    public $city = '';
    public $email = '';
    public $phone = '';
    public $password = '';
    public $password_confirmation = '';

    public function register()
    {
        $this->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'street' => ['required', 'string', 'max:255'],
            'street_number' => ['nullable', 'string', 'max:255'],
            'postcode' => ['required', 'numeric', 'digits:4'],
            'city' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'min:8', 'confirmed'],
        ]);
        $user = Guardian::create([
            'street' => $this->street,
            'street_number' => $this->street_number,
            'postcode' => $this->postcode,
            'city' => $this->city,
        ])->user()->create([
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'phone' => $this->phone,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        event(new Registered($user));

        Auth::login($user, true);

        return redirect()->intended(route('dashboard'));
    }

    public function render()
    {
        return view('livewire.auth.register')->extends('layouts.auth');
    }
}
