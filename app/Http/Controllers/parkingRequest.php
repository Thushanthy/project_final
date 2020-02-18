<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use Session;

class parkingRequest extends Controller
{
    public function store(Request $request){

        $request->validate([
            'parkingspace' => 'required',
            'vehicles' => 'required',
            'fromdate' => 'required',
            'todate' => 'required'
        ]);

        $parkingspace = $request->input('parkingspace');
        $vehicles = $request->input('vehicles');
        $fdate = $request->input('fromdate');
        $ftime = $request->input('fromdate');
        $tdate = $request->input('todate');
        $ttime = $request->input('todate');
        $driver_id = Session::get('driverid');
        $marked = 'f';
        $confirmed = 'f';
        $data=array('parkingId'=>$parkingspace,"vehicleNumber"=>$vehicles,"bookingfDate"=>$fdate,"bookingtDate"=>$tdate,"bookingfTime"=>$ftime,"bookingtTime"=>$ttime,'driver_id'=>$driver_id,'marked'=>$marked,'confirmed'=>$confirmed);
        DB::table('notification')->insert($data);

        return redirect('notification');
    }
}
