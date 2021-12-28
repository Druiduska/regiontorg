<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
//use Carbon\Carbon;

use App\Models\User;
use \Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Support\Facades\Hash;

class Proba extends Controller
{
    public function send(){
//        dd(auth()->user());
        $rslt=auth()->user();
        return json_encode($rslt);
    }
}
