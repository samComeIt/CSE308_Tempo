<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'type','user_id','timeslot_id','facility_id','reservation_status','purpose','number',
    ];
    protected $primaryKey ='reservation_id';
}
