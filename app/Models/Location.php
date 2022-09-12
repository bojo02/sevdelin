<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'code', 'rate_id', 'region_id'];

    public function rate(){
        return $this->belongsTo(Rate::class);
    }
    public function region(){
        return $this->belongsTo(Region::class);
    }
}
