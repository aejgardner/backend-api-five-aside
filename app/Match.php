<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    // only allow these fields to get updated via mass assignment
    protected $fillable = ["team_one_name", "team_one_score", "team_two_name", "team_two_score"];
}
