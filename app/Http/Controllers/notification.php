<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class notification extends Controller
{
    public function index()
    {
        $notification = DB::table('notification')->get();
        return view('driver.notification',['notification' => $notification]);
    }
}
