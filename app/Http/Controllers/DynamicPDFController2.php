<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;

class DynamicPDFController2 extends Controller
{
    //
    function index(){
        $customer_data = $this->get_customer_data();
        return view('dynamic_pdf2')->with('customer_data', $customer_data);
    }
    function get_customer_data(){
        $customer_data = DB::table('parking_spaces')
                            ->limit(10)
                            ->where('landowner_id', '=', 1)
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
            <th style="border: 1px solid; padding:12px;" width="15%">Park Name</th>
            <th style="border: 1px solid; padding:12px;" width="15%">Address</th>
            <th style="border: 1px solid; padding:12px;" width="10%">Verified</th>
            // <th style="border: 1px solid; padding:12px;" width="50%">Description</th>
        
        </tr>
        ';
        foreach($customer_data as $customer){
            $output .='
            <tr>
                <td style="border: 1px solid; padding:12px;">'.$customer->id.'</td>
                <td style="border: 1px solid; padding:12px;">'.$customer->name.'</td>
                <td style="border: 1px solid; padding:12px;">'.$customer->address.'</td>
                <td style="border: 1px solid; padding:12px;">'.$customer->verified.'</td>
                <td style="border: 1px solid; padding:12px;">'.$customer->description.'</td>
            </tr> ';
        }
        $output .='</table>';
        return $output; 
    }

}
