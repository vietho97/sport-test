<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\MatchModel;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    public function get(Request $request)
    {
        $matches = MatchModel::with(['homeTeam.country', 'awayTeam.country', 'competition'])->get();
        $data = [];
        foreach ($matches as $match) {
            $match->home_scores = array_combine(config('constants.score_rules'), $match->home_scores);
            $match->away_scores = array_combine(config('constants.score_rules'), $match->away_scores);
            $match->match_status = config('constants.match_status')[$match->status_id];
            $data[$match->competition_id][] = $match;
        }
        
        return response()->json($data);
    }
}
