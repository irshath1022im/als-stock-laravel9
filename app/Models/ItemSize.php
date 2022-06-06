<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemSize extends Model
{
    use HasFactory;

    protected $fillable = ['item_id', 'size_id'];


    public function item()
    {
        return $this->belongsTo(Item::class);
    }


    public function size()
    {
        return $this->belongsTo(Size::class);
    }

  

}
