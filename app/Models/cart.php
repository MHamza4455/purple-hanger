<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = "carts";
    protected $primaryKey = "id";
    protected $fillable = [
        'user_id', 
        'product_id', 
        'quantity'
    ];

    public function user()
    {
        return $this->belongsTo(User::class); 
    }
    public function products()
    {
        return $this->belongsTo('App\Models\Product', 'product_id', 'id'); 
    }
}
