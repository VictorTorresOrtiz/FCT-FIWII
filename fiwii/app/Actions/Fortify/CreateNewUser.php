<?php

namespace App\Actions\Fortify;

use App\Mail\ContactanosMailable;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Illuminate\Support\Facades\Mail;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:15'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                'regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
            // 'country' => ['required', 'string', 'max:255'],
        ])->validate();
        $correo=new ContactanosMailable($input['name'],$input['username'],$input['status']);
        Mail::to($input['email'])->send($correo);
        return User::create([
            'name' => $input['name'],
            'username' => $input['username'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'status' => $input['status'],
            // 'country' => $input['country'],
        ]);
    }
}
