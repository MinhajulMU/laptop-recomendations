<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    //
    protected $table = 'laptop';
    protected $fillable = ['Company','Product'];
}
