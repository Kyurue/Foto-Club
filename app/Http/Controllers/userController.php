<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\remove;
use App\User;

class userController extends Controller
{
    public function getUsers() {
        $users = DB::select('select * from users');
        return view('panel.users',['users'=>$users]);
    }

    // public function pagination() {
    //     $list = DB::table('users')->pagination(20);
    //     return view('panel.users', ['list' => $list]);
    // }

    public function index() { 
        
    }

    public function deleteUser(User $user, $id=0){

        if($id != 0){
            $user->destroy($id);
        }
        return redirect( url('/panel/users'));
      }

}
