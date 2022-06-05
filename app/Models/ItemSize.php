<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemSize extends Model
{
    use HasFactory;


    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function itemSizeTransections()
    {
        return $this->hasMany(ItemTransectionLog::class);
    }

}
