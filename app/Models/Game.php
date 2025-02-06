<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = ['player1_id', 'player2_id', 'player1_score', 'player2_score', 'game_data', 'status'];

    protected $casts = [
        'game_data' => 'array'
    ];
}
