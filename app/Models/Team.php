<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $keyType = 'string';
    
    public $incrementing = false;

    protected $guarded = ['id'];

    public function competition()
    {
        return $this->belongsTo(Competition::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function homeMatches()
    {
        return $this->hasMany(MatchModel::class, 'home_team_id');
    }

    public function awayMatches()
    {
        return $this->hasMany(MatchModel::class, 'away_team_id');
    }
}