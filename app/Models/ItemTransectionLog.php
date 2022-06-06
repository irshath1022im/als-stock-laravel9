<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemTransectionLog extends Model
{
    use HasFactory;

    protected $fillable = ['date','item_id', 'size_id', 'remark', 'transection_type', 'qty'];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function itemSize()
    {
        return $this->belongsTo(ItemSize::class);
    }

    public function size()
    {
        return $this->belongsTo(Size::class);
    }

    public function transectionType()
    {
        return $this->belongsTo(TransectionType::class);
    }
}
