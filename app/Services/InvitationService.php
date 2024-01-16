<?php

namespace App\Services;

use App\Models\Invitation;
use Illuminate\Support\Str;

class InvitationService
{
    public function storeInvitation(Invitation $invitation, string $email)
    {
        $invitation->email = $email;
        $invitation->token = Str::uuid();
        $invitation->save();
    }

    public function deleteInvitation(Invitation $invitation)
    {
        $invitation->delete();
    }
}
