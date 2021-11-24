<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function getStock()
    {
        return number_format ($this->stock - (($this->qty )));
    }
}
