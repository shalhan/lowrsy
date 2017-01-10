<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invitation;

class InvitationController extends Controller
{
    public function viewInvitation(){
        $viewInvitation = Invitation::get();
        return view('contents.dashboard', compact('viewInvitation'));
    }

    public function deleteInvitation($id){
        $delInvitation = Invitation::where('id',$id)->delete();

        return redirect('/');
    }
}
