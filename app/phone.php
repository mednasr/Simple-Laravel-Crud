<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phone extends Model
{
    public $fillable = ['brand','description','color','user_id'];
}
