<?php

namespace App\Http\Controllers;

use App\Spot;
use Illuminate\Http\Request;

class SpotController extends Controller
{
    public function index()
    {
        return Spot::all();
    }

    public function show(Spot $spot)
    {
        return $spot;
    }
}
