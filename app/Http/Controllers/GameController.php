<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function updateScore(Request $request, $gameId)
    {
        $game = Game::findOrFail($gameId);
        $userId = Auth::id();

        if ($userId == $game->player1_id) {
            $game->increment('score1', $request->input('points', 1));
        } elseif ($userId == $game->player2_id) {
            $game->increment('score2', $request->input('points', 1));
        } else {
            return response()->json(['error' => 'You are not in this game'], 403);
        }

        return response()->json([
            'status' => 'score_updated',
            'score1' => $game->score1,
            'score2' => $game->score2
        ]);
    }

    public function joinGame($gameId)
{
    $game = Game::findOrFail($gameId);

    // Ensure the game is in the 'waiting' state
    if ($game->status !== 'waiting') {
        return response()->json(['error' => 'Game is already in progress or finished'], 400);
    }

    // Find the current player
    $userId = Auth::id(); // Assuming authentication is used

    // Check if the player is already in the game
    if ($userId == $game->player1_id) {
        return response()->json(['message' => 'You are already in this game'], 400);
    }

    // Set the second player
    $game->player2_id = $userId;
    $game->status = 'in_progress'; // Change game status to in-progress
    $game->save();

    return response()->json([
        'status' => 'game_started',
        'game' => $game
    ]);
}
}
