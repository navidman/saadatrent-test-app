<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coffee extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function addons() {
        return $this->belongsToMany(Addon::class);
    }
}
