<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{

    //Attributes of Facility model
    protected $fillable = [
        'Facility_ID', 'Name', 'Location', 'Category', 'Type', 'Capacity', 'filename', 'mime', 'original_filename', 'Status',
    ];
    protected $primaryKey ='Facility_ID';
}
