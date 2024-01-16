<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvitationRequest;
use App\Models\Invitation;
use App\Services\InvitationService;

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
        return InvitationService::store($request['email']);
    }

    public function destroy(Invitation $invitation)
    {
        return InvitationService::delete($invitation);
    }
}
