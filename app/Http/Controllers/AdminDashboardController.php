<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
     public function index()
    {
        $parkingslots = DB::table('parking_spaces')->get();
        $vehicle = DB::table('drivervehicles')->get();
        return view('users.admin.dashboard',['parkingslots' => $parkingslots,'vehicle' => $vehicle]);
    }

    public function search(Request $request)
    {
        $location = $request->input('location');
        $type = $request->input('type');
        $parkingslots = DB::table('parking_spaces')->where('address', $location)->where('type',$type)->get();
        $vehicle = DB::table('drivervehicles')->get();

        return view('users.admin.dashboard',['parkingslots'=> $parkingslots,'vehicle' => $vehicle]);
    }

    // public function searchbylocationadmin(Request $request)
    // {
    //     $location = $request->input('location');
    //     $parkingslots = DB::table('parking_spaces')->where('address', $location)->get();
    //     $vehicle = DB::table('drivervehicles')->get();

    //     return view('users.admin.dashboard',['parkingslots'=> $parkingslots,'vehicle' => $vehicle]);
    // }

    // public function searchbyTypeadmin(Request $request)
    // {
    //     $type = $request->input('type');
    //     $parkingslots = DB::table('parking_spaces')->where('type', $type)->get();
    //     $vehicle = DB::table('drivervehicles')->get();

    //     return view('users.admin.dashboard',['parkingslots'=> $parkingslots,'vehicle' => $vehicle]);
    // }
}
