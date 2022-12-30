<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $table = 'pt';
    protected $primaryKey = 'id';
    public function mergeuser()
    {
        return $this->hasOne('App\Models\muser', 'uid', 'user');
    }
    public function mergegender()
    {
        return $this->hasOne('App\Models\mgender', 'gid', 'gender');
    }
    public function mergestate()
    {
        return $this->hasOne('App\Models\mstate', 'sid', 'state');
    }
}