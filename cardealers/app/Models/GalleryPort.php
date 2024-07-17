<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryPort extends Model
{
    use HasFactory;
    protected $table = "galleryport";
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps = false;

    public function purchase()
    {
        return $this->belongsTo(Purchase::class);
    }
}
