<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Purchase extends Model
{
    use HasFactory;

    protected $table = "purchases";
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps = false;

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->created_at = Carbon::now();
            $model->updated_at = Carbon::now();
        });

        static::updating(function ($model) {
            $model->updated_at = Carbon::now();
        });
    }

    function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function galleries()
    {
        return $this->hasMany(Gallery::class, 'purchase_id');
    }

    public function galleriesPort()
    {
        return $this->hasMany(GalleryPort::class, 'purchase_id');
    }

    public function galleriesBuy()
    {
        return $this->hasMany(GalleryBuy::class, 'purchase_id');
    }
}
