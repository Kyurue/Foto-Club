<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class remove extends Model
{
    public function deleteData($id){
        DB::table('form_multiple_upload')->where('id', '=', $id)->delete();
      }
}
