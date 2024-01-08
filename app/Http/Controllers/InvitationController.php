<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvitationRequest;
use App\Models\Invitation;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class InvitationController extends Controller
{
    public function index()
    {
        $data['invitations'] = Invitation::all();

        return view('portal.invitation.index', $data);
    }

    public function create()
    {
        return view('portal.invitation.create');
    }

    public function store(InvitationRequest $request)
    {
        $email = $request['email'];

        $user = User::where('email', $email)->first();
        if ($user) {
            return redirect()
                ->back()
                ->withErrors(['email' => 'User already exists.'])
                ->withInput($request->only('email'));
        }

        $invitee = Invitation::where('email', $email)->first();
        if ($invitee) {
            return redirect()
                ->back()
                ->withErrors(['email' => 'Invitation has already been sent.'])
                ->withInput($request->only('email'));
        }

        $invitation = new Invitation();
        $invitation->email = $email;
        $invitation->token = Str::uuid();
        $invitation->save();

        Session::flash('success', 'Invitation Sent');
        return redirect()->route('portal.invitation.index');
    }

    public function destroy(Invitation $invitation)
    {
        $invitation->delete();

        Session::flash('success', 'Deleted');
        return redirect()->back();
    }
}
