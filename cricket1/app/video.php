<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    protected $fillable=['videopath','videotitle','tumbnailpath'];
}
