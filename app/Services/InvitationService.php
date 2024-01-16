<?php

namespace App\Services;

use App\Models\Invitation;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class InvitationService
{
    public static function store(string $email)
    {
        $user = User::where('email', $email)->first();
        if ($user) {
            return redirect()
                ->back()
                ->withErrors(['email' => 'Member already exists.'])
                ->withInput();
        }

        $invitee = Invitation::where('email', $email)->first();
        if ($invitee) {
            return redirect()
                ->back()
                ->withErrors(['email' => 'Invitation has already been sent.'])
                ->withInput();
        }

        $invitation = new Invitation();
        $invitation->email = $email;
        $invitation->token = Str::uuid();
        $invitation->save();

        Session::flash('success', 'Invitation Sent');
        return redirect()->route('portal.invitation.index');
    }

    public static function delete(Invitation $invitation)
    {
        $invitation->delete();

        Session::flash('success', 'Invitation Removed');
        return redirect()->back();
    }
}
