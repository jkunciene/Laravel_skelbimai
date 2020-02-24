<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['id', 'subject', 'priority', 'dueDate', 'percent' ];
}
