<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penalty extends Model
{
    protected $fillable = [
        'penalty_id','reservation_id', 'reason',
    ];
    protected $primaryKey ='penalty_id';
}
