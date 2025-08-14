<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Handset extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','brand_id','price','release_date','features','status'
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class,'brand_id');
    }
}
