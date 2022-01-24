<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'nickname' => ['required', 'string', 'max:255'],
            'password' => $this->passwordRules(),
            'login' => ['required', 'string', 'max:255', 'unique:users'],            
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone_number' => ['required','string','max:255', 'unique:users'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return User::create([
            'nickname' => $input['nickname'], 
            'password' => Hash::make($input['password']),
            'login' => $input['login'],
            'email' => $input['email'],
            'phone_number' => $input['phone_number'],   
        ]);
    }
}
