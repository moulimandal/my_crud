<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mgender extends Model
{
   
    use HasFactory;
    protected $table = 'gendermaster';
    protected $primaryKey = 'gid';
}
