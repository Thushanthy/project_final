<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parking_space extends Model
{   
  protected $table = 'parking_spaces';
  protected $primaryKey = 'id';
    protected $fillable = [
      'landowner_id' ,
      'admin_id' ,
      'name' ,
      'address' ,
      'longitude',
      'latitude',
      // 'image' ,
      // 'open_days'
      // 'open_from' ,
      // 'open_till' ,
      // 'open_status' ,
      'is_reservation_on',
      'image_url',
      'description',
      'poya',
      'bank',
      'public',
      'updated_at',
      'created_at'

    ];

    public function opentimes()
    {
        return $this->hasMany('App\Opentime', 'parking_space_id');
    }

    public function parking_vehicle_types()
    {
        return $this->hasMany('App\Parking_vehicle_type', 'parking_space_id');
    }
}
