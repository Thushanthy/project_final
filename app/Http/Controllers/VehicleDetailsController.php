<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicledetail;
use DB;
use Session;

class VehicleDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $vehicledetails = Vehicledetail::all();
        return view('vehicledetails.index', compact('vehicledetails'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('vehicledetails.create');
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
            'vehiclename' => 'required',
            'type' => 'required'
        ]);

        $vehicledetails = new Vehicledetail([
            
            'vehiclename' => $request->get('vehiclename'),
            'type' => $request->get('type'),
            'company' => $request->get('company'),
            'registeredprovince' => $request->get('registeredprovince'),
            'coderange' => $request->get('coderange'),
        ]);
        $vehicledetail->save();
        return redirect('/loginadmin')->with('success', 'vehicledetail saved!');
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
         $vehicledetail = Vehicledetail::find($id);
        return view('crud.vehicledetails.create')->with('id',$id);
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
            'vehiclename' => 'required',
            'type' => 'required'
        ]);

        $vehicledetail = Vehicledetail::find($id);
        $vehicledetail->vehiclename =  $request->get('vehiclename');
        $vehicledetail->type = $request->get('type');
        $vehicledetail->company = $request->get('company');
        $vehicledetail->registeredprovince = $request->get('registeredprovince');
        $vehicledetail->coderange = $request->get('coderange');
        $vehicledetail->save();

        return redirect('/loginadmin')->with('success', 'vehicledetail updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehicledetail = Vehicledetail::find($id);
        $vehicledetail->delete();

        return redirect()->back()->with('success', 'vehicledetail deleted!');
    }

    
}
