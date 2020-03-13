<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\remove;
use App\User;
use App\removeFoto;
use App\fotos;

class userController extends Controller
{
    public function getUsers() {
        $users = DB::select('select * from users');
        return view('panel.users',['users'=>$users]);
    }

    public function getFoto() {
        $form_multiple_upload = DB::select('select * from form_multiple_upload');
        return view('panel.fotos',['form_multiple_upload'=>$form_multiple_upload]);
    }

    public function profile(){
        $user = Auth::user();
        return view('profile',compact('user',$user));
    }

    public function profile2(){
        $user = Auth::user();
        return view('updatePage',compact('user',$user));
    }

    public function update_avatar(Request $request){
        
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = Auth::user();

        $avatarName = $user->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();

        $request->avatar->storeAs('avatars',$avatarName);
        $request->avatar->move(public_path().'/storage/avatars/', $avatarName);  // your folder path
        $user->avatar = $avatarName;
        $user->save();

        return back()
            ->with('success','You have successfully upload image.');

    }
    public function deleteUser(User $user, $id=0){

        if($id != 0){
            $user->destroy($id);
        }
        return redirect( url('/panel/users'));
      }
    
    public function deleteFoto($id=0){

        $form_multiple_upload = DB::select('select * from form_multiple_upload');
        $form_multiple_upload->destroy($id);
        return redirect( url('/panel/fotos'));
      }
}

