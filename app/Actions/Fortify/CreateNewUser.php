<?php

namespace App\Actions\Fortify;

use App\Models\Guardian;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param array $input
     * @return \App\Models\User
     * @throws \Illuminate\Validation\ValidationException
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'street' => ['required', 'string', 'max:255'],
            'street_number' => ['nullable', 'string', 'max:255'],
            'zip' => ['required', 'numeric'],
            'place' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
        ])->validate();

        return Guardian::create([
            'street' => $input['street'],
            'street_number' => $input['street_number'],
            'zip' => $input['zip'],
            'place' => $input['place'],
        ])->user()->create([
            'firstname' => $input['firstname'],
            'lastname' => $input['lastname'],
            'phone' => $input['phone'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
