<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mstate extends Model
{
    use HasFactory;
    protected $table = 'statesmaster';
    protected $primaryKey = 'sid';
}
