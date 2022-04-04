<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $table='hotel_tabel';

    protected $fillable = ["name","location","price","image","fasilitate","desc"];
    protected $guarded = [
        'id'
    ];
}
