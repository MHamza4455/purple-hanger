<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatagoryLevelOne extends Model
{
    use HasFactory;
    protected $table = "catagory_level_ones";
    protected $primaryKey = "id";

    public function secondcat(){
        return $this->hasMany('App\Models\CatagoryLevelTwo', 'id', 'catagory_level_one_id');

    }
    public function thirdcat(){
        return $this->hasMany('App\Models\CatagoryLevelThree', 'id', 'catagory_level_one_id');

    }
    public function product(){
        return $this->hasMany('App\Models\Product', 'id', 'catagory_level_one_id');

    }
}
