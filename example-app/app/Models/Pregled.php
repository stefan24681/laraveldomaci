<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregled extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function pacijent()
    {
        return $this->belongsTo(Pacijent::class);
    }

    public function lekar()
    {
        return $this->belongsTo(Lekar::class);
    }
}