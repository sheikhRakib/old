<?php

namespace App\Actions\Fortify;

use App\Models\InvitationToken;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

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
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique(User::class)],
            'password' => $this->passwordRules(),],
            [],
            ['name' => 'Full Name', 'email' => 'Email Address', 'password' => 'Password'],
        )->validate();

        $invitee = InvitationToken::where('email', $input['email'])->first();

        if (!$invitee) {
            return redirect()
                ->back()
                ->withErrors(['email' => 'Ask ACT to send invitation.']);
        }

        $invitee->delete();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
