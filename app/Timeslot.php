<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timeslot extends Model
{

    protected $fillable = [
        'timeslot_id','date','start_time','duration','facility_id',
    ];
    protected $primaryKey ='timeslot_id';
}
