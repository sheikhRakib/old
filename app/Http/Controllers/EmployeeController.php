<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvitationRequest;
use App\Models\InvitationToken;
use App\Models\User;
use Illuminate\Support\Str;

class EmployeeController extends Controller
{
    public function index()
    {
        $data['users'] = User::all();
        return view('portal.employee.index', $data);
    }

    public function invite()
    {
        return view('portal.employee.invite');
    }

    public function sendInvitation(InvitationRequest $request)
    {
        $email = $request['email'];

        $user = User::where('email', $email)->first();

        if ($user) {
            return redirect()
                ->back()
                ->withErrors(['email' => 'User already exists.'])
                ->withInput($request->only('email'));
        }

        $invitee = InvitationToken::where('email', $email)->first();
        if ($invitee) {
            return redirect()
                ->back()
                ->withErrors(['email' => 'Invitation has already been sent.'])
                ->withInput($request->only('email'));
        }

        $invite = new InvitationToken();
        $invite->email = $email;
        $invite->token = Str::uuid();
        $invite->save();

        return view('portal.employee.invite');
    }
}
