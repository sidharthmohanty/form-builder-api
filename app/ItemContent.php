<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Item;

class ItemContent extends Model
{
    public function Item(){
        return $this->belongsTo(Item::class);
    }
}
