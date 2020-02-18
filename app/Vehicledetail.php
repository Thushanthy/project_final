<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicledetail extends Model
{   
    protected $table = 'vehicledetails';
    protected $primaryKey = 'id';
    protected $fillable = [
      'vehiclename' ,
      'type' ,
      'company' ,
      'registeredprovince',
      'coderange' ,
    ];
}
