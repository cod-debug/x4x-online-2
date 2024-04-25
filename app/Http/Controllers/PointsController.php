<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PointsController extends Controller
{
    //

    public function index(){
        return view("admin.points.index");
    }

    public function history(){
        return view("admin.points.history");
    }

    public function archive(){
        return view("admin.points.archive");
    }

    public function raffleEntry(){
        return view("admin.points.raffle-entry");
    }
}
