<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatagoryLevelTwo extends Model
{
    use HasFactory;
    protected $table = "catagory_level_twos";
    protected $primaryKey = "id";

    public function firstcat()
    {
        return $this->belongsTo('App\Models\CatagoryLevelOne', 'catagory_level_one_id', 'id'); /// category_level_one_id
    }
    
    public function thirdcat()
    {
        return $this->hasMany('App\Models\CatagoryLevelThree', 'catagory_level_two_id', 'catagory_level_two_id');
    }
    public function product()
    {
        return $this->hasMany('App\Models\Product', 'id', 'catagory_level_two_id');
    }
}
