<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $table = "gallery";
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps = false;

    public function purchase()
    {
        return $this->belongsTo(Purchase::class, 'purchase_id');
    }
}
