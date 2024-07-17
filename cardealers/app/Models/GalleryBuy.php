<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryBuy extends Model
{
    protected $table = "gallerybuy";
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps = false;

    public function purchase()
    {
        return $this->belongsTo(Purchase::class);
    }
}
