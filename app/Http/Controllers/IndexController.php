<?php

namespace App\Http\Controllers;

use App\Models\MatchModel;
use App\Models\Competition;
use App\Models\Team;
use App\Models\Country;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
