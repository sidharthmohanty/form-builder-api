<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ItemContent;

class Item extends Model
{
    public function ItemContents(){
        return $this->hasMany(ItemContent::class);
    }
}
