<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class headlines extends Model
{
    protected $fillable=['title','imagepath','auther','timepublished','news'];
}
