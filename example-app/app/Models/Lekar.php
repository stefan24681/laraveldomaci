<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lekar extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function pregleds()
    {
        return $this->hasMany(Pregled::class);
    }

}