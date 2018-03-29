<?php

namespace App\Http\Controllers;

use App\CheckIn;
use App\Spot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Http\Middleware\Check;
use Tymon\JWTAuth\JWT;
use Tymon\JWTAuth\JWTAuth;

class CheckinController extends Controller
{

    public function create(Request $request)
    {
        try{
            $checkin = new CheckIn();
            $user = Auth::user();

            if($user){
                $checkin->user_id = $user->id;
            }

            $spot = Spot::find(1);

            if($spot){
                $checkin->spot_id = $spot->id;
            }

            $checkin->lat = $spot->lat;
            $checkin->long = $spot->lng;
            $checkin->comment = $request->comment;
            $checkin->save();
            return response($checkin, 201);

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
