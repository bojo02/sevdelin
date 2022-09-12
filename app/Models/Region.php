<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'code'];

    public function locations(){
        return $this->hasMany(Location::class, 'region_id', 'id');
    }
}
