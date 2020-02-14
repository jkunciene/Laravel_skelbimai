<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coment extends Model
{
    protected $fillable = ['id', 'adid', 'userid', 'name', 'comment' ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function ad(){
        return $this->belongsTo(Ad::class);
    }
}
