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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
            'CPF' => ['required', 'string', 'max:14'],
            'Datanasc' => ['required', 'date'],
            'CEP' => ['required', 'string', 'max:9'],
            'Numresi' => ['required', 'string', 'max:5'],
            'Numtel' => ['required', 'string', 'max:15'],
            
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'CPF' => $input['CPF'],
            'Datanasc' =>$input ['Datanasc'],
            'CEP' =>$input['CEP'],
            'Numresi' =>$input ['Numresi'],
            'Numtel' =>$input ['Numtel'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
