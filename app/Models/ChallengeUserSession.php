<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChallengeUserSession extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function challenge(){
        return $this->belongsTo(Challenge::class);
    }

    public function session(){
        return $this->belongsTo(SessionsHome::class);
}
    use HasFactory;
}
