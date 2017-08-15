<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    //protected $fillable=[]

    protected $table="tbl_Announce";
    protected $fillable=['content'];


}
