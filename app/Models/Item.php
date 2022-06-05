<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['item', 'category_id', 'thumbnail'];

    public function itemSize()
    {
        return $this->hasMany(ItemSize::class);
    }

    public function transectionLogs()
    {
        return $this->hasMany(ItemTransectionLog::class);
    }

}
