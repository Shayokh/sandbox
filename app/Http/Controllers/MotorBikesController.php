<?php

namespace App\Http\Controllers;

use App\Bike;
use Illuminate\Http\Request;

class MotorBikesController extends Controller
{
    public function index () {
        $bikes = Bike::all();
        return view('frontend.index')->with('bikes', $bikes);
    }
}
