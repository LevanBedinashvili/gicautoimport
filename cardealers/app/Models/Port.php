<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Port extends Model
{
    use HasFactory;
    protected $table = "ports";
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps = false;
}
