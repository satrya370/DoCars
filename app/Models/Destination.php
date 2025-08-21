<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function search($keyword)
    {
        return $this->where('name', 'LIKE', '%' . $keyword . '%')->get();
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function photo()
    {
        return $this->hasMany(Photos::class);
    }
}
