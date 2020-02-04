<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compair extends Model
{
    protected $table = "compairs";
    protected $fillable = ['name_one', 'name_two', 'plus'];
}
