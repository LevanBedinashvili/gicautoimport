<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    use HasFactory;
    protected $table = "auctions";
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps = false;
}
