<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TBLData extends Model
{
    protected $table = "tbl_data";

    protected $fillable = [
    	'hora', 'latitude', 'longitude', 'altitude', 'temperatura', 'humidade', 'co2', 'luminosidade', 'pressao', 'radiacao'
    ];

    protected $guarded = [
    	'id'
    ];
}
