<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class remove extends Model
{
    public function deleteData($id){
        DB::table('users')->where('id', '=', $id)->delete();
      }
}
