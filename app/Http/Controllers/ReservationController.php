<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use Session;
use DB;


class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $reservations = Reservation::all();

        return view('reservations.index', compact('reservations'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('crud.reservations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'duration_from'=>'required',
            'duration_to'=>'required',
            'parking_id'=>'required',
            'vehicle_type' => 'required'
        ]);
        $reservation = new Reservation([
            'driver_id' => Session::get('driverid'),
            'vehicle_type' => $request->get('vehicle_type'),
            'parking_space_id' => $request->get('parking_id'),
            'duration_from' => $request->get('duration_from'),
            'duration_to' => $request->get('duration_to')
            
        ]);
        $reservation->save();
        return redirect('/logindriver')->with('success', 'Reservation saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicles = DB::table('parking_vehicle_types')->where('parking_space_id',$id)->get();
        return view('crud.reservations.edit')->with('parking_id',$id)->with('vehicles',$vehicles);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required'
        ]);

        $reservation = Reservation::find($id);
        $reservation->first_name =  $request->get('first_name');
        $reservation->last_name = $request->get('last_name');
        $reservation->email = $request->get('email');
        $reservation->job_title = $request->get('job_title');
        $reservation->city = $request->get('city');
        $reservation->country = $request->get('country');
        $reservation->save();

        return redirect('/reservations')->with('success', 'Reservation updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservation = Reservation::find($id);
        $reservation->delete();
        return redirect('/logindriver')->with('success', 'Reservation deleted!');
    }
}
