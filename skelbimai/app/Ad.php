<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $fillable = ['title', 'description', 'img', 'price', 'email', 'phone', 'location', 'catid', 'userid'];

}
