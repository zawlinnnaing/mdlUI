<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //fillable fields
    protected $fillable=['title','content','publisher'];

    //custom timestamp names
    const CREATED='created';
    const UPDATED_AT='active';

   public function photos(){
      return $this->hasMany('App\Photos','post_id');
    }
}
