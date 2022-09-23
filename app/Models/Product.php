<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $primaryKey = "id";

    public function firstcat(){
        return $this->belongsTo('App\Models\CatagoryLevelOne', 'catagory_level_one_id', 'id');

    }
    public function secondcat(){
        return $this->belongsTo('App\Models\CatagoryLevelTwo', 'catagory_level_two_id', 'id');

    }
    public function thirdcat(){
        return $this->belongsTo('App\Models\CatagoryLevelThree', 'catagory_level_three_id', 'id');

    }
}