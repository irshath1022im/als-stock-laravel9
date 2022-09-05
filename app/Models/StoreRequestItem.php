<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreRequestItem extends Model
{
    use HasFactory;

    public function storeRequest()
    {
        return $this->belongsTo(StoreReuqest::class,'id');
    }

    // each request item belogs to item_size_id
    public function itemSize()
    {
        return $this->belongsTo(ItemSize::class);
    }


}
