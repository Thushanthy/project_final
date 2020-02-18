<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

use App\Parking_space;
use App\Reservation;
use App\Parking_vehicle_type;
use App\Landowner;
use App\Contact;
use App\Vehicledetail;

class User_loginController extends Controller
{
  function adminIndex()

  { $vehicledetails = DB::table('vehicledetails')->get();
    $contacts = Contact::all();
    $parking_spaces = Parking_space::all();
    $id = DB::table('admins')->where(['username'=>$username,'password'=>$password])->first();
    $reviews = DB::table('reviews')->get();
    $data = DB::table('admins')->where(['username'=>$username,'password'=>$password])->get();

    return view('home.signup_login.login.admin.index', compact('username','password','data','id','parking_spaces','reviews','contacts','vehicledetails'));

  }
  function driverIndex()
  {
    $landowners = Landowner::all();
    $parking_spaces = Parking_space::all();
    $reservations = Reservation::all();
    $paking_spaces = Parking_vehicle_type::all();

    return view('home.signup_login.login.landowner.index', compact('parking_spaces','reservations','paking_spaces','landowners'));

  }
  function landownerIndex()
  {
    $landowners = Landowner::all();
    $parking_spaces = Parking_space::all();
    $reservations = Reservation::all();
    $paking_spaces = Parking_vehicle_type::all();

    return view('home.signup_login.login.landowner.index', compact('parking_spaces','reservations','paking_spaces','landowners'));

  }
  public function landowner_login(Request $req)
  {
    $username = $req->input('username');
    $password = $req->input('password');

    $checkLogin = DB::table('landowners')->where(['username'=>$username,'password'=>$password])->orWhere('id',Session::get('landownerid'))->first();
    if($checkLogin)
    {
      Session::put('landownerid',$checkLogin->id);
      // echo "Login SuccessFull<br/>";
      $landowners = Landowner::all();
      //$parking_spaces = Parking_space::all();
      //$reservations = Reservation::all();
      $parking_space_vehicle = Parking_vehicle_type::all();

      $id = DB::table('landowners')->where(['username'=>$username,'password'=>$password])->orWhere('id',Session::get('landownerid'))->first();
      $landowner_parking_spaces = DB::table('parking_spaces')->where('landowner_id',$id->id)->get();
      $landowner_parking_spaces_count = DB::table('parking_spaces')->where('landowner_id',$id->id)->count();
      $reservations = DB::table('reservations')->join('parking_spaces', 'reservations.parking_space_id', '=', 'parking_spaces.id')->where('landowner_id',$id->id)->get();
      $reservations_count = DB::table('reservations')->join('parking_spaces', 'reservations.parking_space_id', '=', 'parking_spaces.id')->where('landowner_id',$id->id)->count();
      $parking_types = DB::table('parking_vehicle_types')->join('parking_spaces', 'parking_vehicle_types.parking_space_id', '=', 'parking_spaces.id')->where('landowner_id',$id->id)->get();

      return view('users.landowner.index', compact('id','parking_types','reservations','landowner_parking_spaces','landowners','reservations_count','landowner_parking_spaces_count'));
    }
    else
    {
      echo "Login Failed Wrong Data Passed";
      return view('login.users.landownerLogin');

    }
  }
  public function driver_login(Request $req)
  {
    $username = $req->input('username');
    $password = $req->input('password');

    $checkLogin = DB::table('drivers')->where(['username'=>$username,'password'=>$password])->orWhere('id',Session::get('driverid'))->first();
    if($checkLogin)
    {
      
      Session::put('driverid',$checkLogin->id);
      // echo "Login SuccessFull<br/>";
      $id=$checkLogin;
      $landowners = Landowner::all();
      $parking_spaces = Parking_space::all();
      $reservations = Reservation::where('driver_id',$id->id)->get();
      $paking_spaces = Parking_vehicle_type::all();

      return view('users.driver.index', compact('id','parking_spaces','reservations','paking_spaces','landowners'));
    }
    else
    {
      echo "Login Failed Wrong Data Passed";
      return view('login.users.driverLogin');

    }
  }
  public function admin_login(Request $req)
  {
    $username = $req->input('username');
    $password = $req->input('password');

    $data = DB::table('admins')->where(['username'=>$username,'password'=>$password])->orWhere('id',Session::get('adminid'))->first();
    if($data)
    {
      
      Session::put('adminid',$data->id);
      // echo "Login SuccessFull<br/>";
      //echo $id[0]->id;
      $contacts = Contact::all();
      $parking_spaces = Parking_space::all();

      $id = DB::table('admins')->where(['username'=>$username,'password'=>$password])->orWhere('id',Session::get('adminid'))->first();
      // $admins = DB::table('admins')->get();
      $reviews = DB::table('reviews')->get();
      $vehicledetails = DB::table('vehicledetails')->get();

      return view('users.admin.index', compact('username','password','data','id','parking_spaces','reviews','contacts','vehicledetails'));
    }
    else
    {
      echo "Login Failed Wrong Data Passed";
      return view('login.users.adminLogin');

    }
  }

  /* User signup functions */

  public function landowner_signup(Request $req){
    $this->validate($req, [
      'firstname'     => 'required|max:100',
      'lastname'      => 'required|max:100',
      'gender'        => 'required',
      'contactno'     => 'required|max:10',
      'nic'           => 'required|min:10|max:12|unique:landowners,nic',
      'email'         => 'required|email|unique:landowners,email',
      'username'      => 'required|unique:landowners,username',
      'password'      => 'required'
    ]);

    if($req->password != $req->conpassword){
      Session::flash('error','Password and confirm password do not match!');
      return redirect()->back();
    }

    DB::table('landowners')->insert([
      'first_name'    => $req->firstname,
      'last_name'     => $req->lastname,
      'gender'        => $req->gender,
      'contact_no'    => $req->contactno,
      'nic'           => $req->nic,
      'email'         => $req->email,
      'username'      => $req->username,
      'password'      => $req->password
    ]);
    
    $checkLogin = DB::table('landowners')->where(['username'=>$req->username,'password'=>$req->password])->first();
    if($checkLogin)
    {
      // echo "Login SuccessFull<br/>";
      $landowners = Landowner::all();
      //$parking_spaces = Parking_space::all();
      //$reservations = Reservation::all();
      $parking_space_vehicle = Parking_vehicle_type::all();

      $id = DB::table('landowners')->where(['username'=>$req->username,'password'=>$req->password])->first();
      $landowner_parking_spaces = DB::table('parking_spaces')->where('landowner_id',$id->id)->get();
      $landowner_parking_spaces_count = DB::table('parking_spaces')->where('landowner_id',$id->id)->count();
      $reservations = DB::table('reservations')->join('parking_spaces', 'reservations.parking_space_id', '=', 'parking_spaces.id')->where('landowner_id',$id->id)->get();
      $reservations_count = DB::table('reservations')->join('parking_spaces', 'reservations.parking_space_id', '=', 'parking_spaces.id')->where('landowner_id',$id->id)->count();
      $parking_types = DB::table('parking_vehicle_types')->join('parking_spaces', 'parking_vehicle_types.parking_space_id', '=', 'parking_spaces.id')->where('landowner_id',$id->id)->get();

      return view('users.landowner.index', compact('id','parking_types','reservations','landowner_parking_spaces','landowners','reservations_count','landowner_parking_spaces_count'));
    }
  }

  public function driver_signup(Request $req){
    $this->validate($req, [
      'firstname'     => 'required|max:100',
      'lastname'      => 'required|max:100',
      'gender'        => 'required',
      'contactno'     => 'required|max:10',
      'address'       => 'required',
      'license'       => 'required|unique:drivers,licence_id',
      'nic'           => 'required|min:10|max:12|unique:drivers,nic',
      'email'         => 'required|email|unique:drivers,email',
      'username'      => 'required|unique:drivers,username',
      'password'      => 'required'
    ]);

    if($req->password != $req->conpassword){
      Session::flash('error','Password and confirm password do not match!');
      return redirect()->back();
    }

    DB::table('drivers')->insert([
      'first_name'    => $req->firstname,
      'last_name'     => $req->lastname,
      'gender'        => $req->gender,
      'contact_no'    => $req->contactno,
      'address'       => $req->address,
      'licence_id'    => $req->license,
      'nic'           => $req->nic,
      'email'         => $req->email,
      'username'      => $req->username,
      'password'      => $req->password
    ]);

    $checkLogin = DB::table('drivers')->where(['username'=>$req->username,'password'=>$req->password])->first();
    if($checkLogin)
    {
      // echo "Login SuccessFull<br/>";
      $landowners = Landowner::all();
      $parking_spaces = Parking_space::all();
      $reservations = Reservation::where('driver_id',$checkLogin->id);
      $paking_spaces = Parking_vehicle_type::all();

      return view('users.driver.index', compact('parking_spaces','reservations','paking_spaces','landowners'));
    }
  }
}
?>
