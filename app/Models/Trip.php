<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = 'trips';
    protected $fillable = [
        'trip_name',
        'status',
    ];
}
