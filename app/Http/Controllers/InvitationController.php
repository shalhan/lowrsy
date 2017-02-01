<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invitation;

class InvitationController extends Controller
{
    private $uptId;

    private function setUptId($id){
        $this->uptId = $id;
    }

    private function getUptId(){
        return $this->uptId;
    }

    // private function clearUptId(){
    //     $this->uptId = null;
    // }

    public function viewInvitation(){
        $viewInvitation = Invitation::get();
        return view('contents.invitation_dashboard', compact('viewInvitation'));
    }

    public function deleteInvitation($id){
        $delInvitation = Invitation::where('id',$id)->delete();

        return redirect('/');
    }

    public function updateInvitationView($id){
        // $this->setUptId($id);
        // echo $this->getUptId();
        return view('contents.invitation_update', compact('id'));
    }

    public function updateInvitation($id, Request $r){
        // echo $this->getUptId();
        $name = null;
        $invitationName = null;
        $imageDisplay = null;
        $imagePreview = null;
        
        $name = $r->name;
        $invitationName = $r->invitationName;
        $imageDisplay = $r->imageDisplay;
        $imagePreview = $r->imagePreview;
        
        if($name != null){
          Invitation::where('id', $id)->update(['display_name' => $name]);      
        }

        if($invitationName != null){
          Invitation::where('id', $id)->update(['invitation_name' => $invitationName]);      
        }

        if($imageDisplay != null){
          Invitation::where('id', $id)->update(['image_display' => $imageDisplay]);      
        }

        if($imagePreview != null){
          Invitation::where('id', $id)->update(['image_preview' => $imagePreview]);      
        }

        return redirect('/');
    }
}
