<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userController extends Controller
{
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
}

