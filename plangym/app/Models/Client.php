<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public function trainer(){
        return $this->belongsTo(Trainer::class);
     }
 
     public function sessions(){
         return $this->hasMany(Session::class);
     }

}
