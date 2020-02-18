<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact_us extends Model
{   
  protected $table = 'contacts';

  // Define primary key explicitly
  protected $primaryKey = 'id';
    protected $fillable = [
      'first_name' ,
      'last_name' ,
      'email' ,
      'phone_no',
      'description'
    ];
}
