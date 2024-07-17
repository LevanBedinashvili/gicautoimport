<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;
    protected $table = "models";
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps = false;
}
