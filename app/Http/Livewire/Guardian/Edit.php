<?php

namespace App\Http\Livewire\Guardian;

use Livewire\Component;

class Edit extends Component
{
    public $firstname = '';
    public $lastname = '';
    public $street = '';
    public $street_number = '';
    public $postcode = '';
    public $city = '';
    public $phone = '';
    public $email = '';

    public function mount()
    {
        if (!auth()->check()) {
            return;
        }

        $guardian = auth()->user()->guardian;

        $this->firstname = $guardian->firstname;
        $this->lastname = $guardian->lastname;
        $this->street = $guardian->street;
        $this->street_number = $guardian->street_number;
        $this->postcode = $guardian->postcode;
        $this->city = $guardian->city;
        $this->phone = $guardian->phone;
        $this->email = $guardian->email;
    }

    public function update()
    {
        $this->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'street' => ['required', 'string', 'max:255'],
            'street_number' => ['nullable', 'string', 'max:255'],
            'postcode' => ['required', 'numeric', 'digits:4'],
            'city' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);
        $user = auth()->user();
        $guardian = $user->guardian;

        $user->update([
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'phone' => $this->phone,
            // TODO[mr]: check if email was changed and re verify (28.10.20 mr)
            'email' => $this->email,
        ]);

        $guardian->update([
            'street' => $this->street,
            'street_number' => $this->street_number,
            'postcode' => $this->postcode,
            'city' => $this->city,
        ]);

        $this->redirect(route('dashboard.index'));
    }

    public function render()
    {
        return view('livewire.guardian.edit');
    }
}
