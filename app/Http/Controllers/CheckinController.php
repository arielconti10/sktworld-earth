<?php

namespace App\Http\Controllers;

use App\CheckIn;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Http\Middleware\Check;

class CheckinController extends Controller
{


    public function doCheckin(Request $request)
    {
        //TODO: Encontrar spot baseado na lat/long ou no id?

//        $checkin = new CheckIn()

    }
}
