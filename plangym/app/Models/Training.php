<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    public function exercice(){
        return $this->belongsTo(Exercice::class);
     }

     public function session(){
        return $this->belongsTo(Session::class);
     }
}
