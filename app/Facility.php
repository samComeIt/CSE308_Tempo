<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    //Attributes of Facility model
    protected $fillable = [
        'Facility_ID', 'Name', 'Location', 'Category', 'Type', 'Capacity', 'Picture', 'Status',
    ];

}
