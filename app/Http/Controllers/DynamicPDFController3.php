<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;

class DynamicPDFController3 extends Controller
{
    //
    function index(){
        $customer_data = $this->get_customer_data();
        return view('dynamic_pdf3')->with('customer_data', $customer_data);
    }
    function get_customer_data(){
        $customer_data = DB::table('reservations')
                            ->limit(10)
                            ->where('parking_space_id', '=', 1)
                            ->get();
        return $customer_data;
    }
    function pdf(){
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->convert_customer_data_to_html());
        return $pdf->stream();
    }

    function convert_customer_data_to_html(){
        $customer_data = $this->get_customer_data();
        $output = '
        <h3 align="center">Land details</h3>
        <table width="100%" style="border-collapse:collapse; border: 0px;">
        <tr>
            <th style="border: 1px solid; padding:12px;" width="10%">id</th>
            <th style="border: 1px solid; padding:12px;" width="15%">Duration from</th>
            <th style="border: 1px solid; padding:12px;" width="15%">Duration to</th>
            <th style="border: 1px solid; padding:12px;" width="10%">Vehicle type</th>
        
        </tr>
        ';
        foreach($customer_data as $customer){
            $output .='
            <tr>
                <td style="border: 1px solid; padding:12px;">'.$customer->parking_space_id.'</td>
                <td style="border: 1px solid; padding:12px;">'.$customer->duration_from.'</td>
                <td style="border: 1px solid; padding:12px;">'.$customer->duration_to.'</td>
                <td style="border: 1px solid; padding:12px;">'.$customer->vehicle_type.'</td>
    
            </tr> ';
        }
        $output .='</table>';
        return $output; 
    }

}
