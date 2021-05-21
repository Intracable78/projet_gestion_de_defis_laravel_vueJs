<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{

    public function assignedChallenges()
    {
        return $this->belongsToMany('App\Models\Challenge')
            ->using("App\Models\Picture")
            ->withPivot("id")
            ->withTimestamps();
    }
    public function session()
    {
        return $this->belongsTo(SessionsHome::class);
    }

    public function picture()
    {
        return $this->hasMany(Picture::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class)
            ->using(CompletedChallenge::class)
            ->withPivot('id')
            ->withTimestamps();
    }
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'points',
        'session_id'
        ];
}
