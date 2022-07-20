<?php

namespace App\Http\Controllers;

class PongController extends Controller
{
    public function ping(){
        return response()->json(['message' => 'pong']);
    }


}
