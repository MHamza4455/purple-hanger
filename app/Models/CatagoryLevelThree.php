<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatagoryLevelThree extends Model
{
    use HasFactory;
    protected $table = "catagory_level_threes";
    protected $primaryKey = "id";

    public function secondcat()
    {
        return $this->belongsTo('App\Models\CatagoryLevelTwo', 'catagory_level_two_id', 'id');
    }
    public function firstcat()
    {
        return $this->belongsTo('App\Models\CatagoryLevelOne', 'catagory_level_one_id', 'id');
    }
    public function product()
    {
        return $this->hasMany('App\Models\Product', 'id', 'catagory_level_three_id');

    }
}
