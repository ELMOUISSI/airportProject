<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vole extends Model
{
    use HasFactory;
    protected $fillable = [
       
        'airport-depart-id',
        'airport-arrival-id',
        'date-depart',
        'date-arrival',
        

    ];

    public function airportDepart()
    {
        return $this->belongsTo(Airport::class,'airport-depart-id');
    }
}
