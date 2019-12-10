<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cancel extends Model
{
    protected $fillable = [
        'timeslot_id','type','user_id','date','start_time','duration','facility_id','reservation_status','purpose','number',

    ];
    protected $primaryKey ='id';
}
