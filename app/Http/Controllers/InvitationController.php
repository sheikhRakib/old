<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvitationRequest;
use App\Models\Invitation;
use App\Models\User;
use App\Services\InvitationService;
use Illuminate\Support\Facades\Session;

class InvitationController extends Controller
{
    protected InvitationService $invitationService;

    public function __construct(InvitationService $invitationService)
    {
        $this->invitationService = $invitationService;
    }

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
                ->withErrors(['email' => 'Member already exists.'])
                ->withInput($request->only('email'));
        }

        $invitee = Invitation::where('email', $email)->first();
        if ($invitee) {
            return redirect()
                ->back()
                ->withErrors(['email' => 'Invitation has already been sent.'])
                ->withInput($request->only('email'));
        }

        $this->invitationService->storeInvitation(new Invitation(), $email);

        Session::flash('success', 'Invitation Sent');
        return redirect()->route('portal.invitation.index');
    }

    public function destroy(Invitation $invitation)
    {
        $this->invitationService->deleteInvitation($invitation);

        Session::flash('success', 'Deleted');
        return redirect()->back();
    }
}
