<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SessionsHome extends Model
{
    use HasFactory;

   /* public function user()
    {
        return $this->belongsTo(User::class);
    }*/

    public function assignedSessions()
    {
        return $this->belongsToMany('App\Models\Session')
            ->using("App\Models\Picture")
            ->withPivot("id")
            ->withTimestamps();
    }

    public function challenge()
    {
        return $this->hasMany(Challenge::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class)
            ->using(Leaderboard::class)
            ->withPivot('id')
            ->withTimestamps();
    }

    protected $fillable = [
        'title', 'description', 'start', 'end'
    ];
}
