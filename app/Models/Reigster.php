<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reigster extends Model
{
    protected $table = 'users_';

    protected  $guarded =[];
    use HasFactory;
}
