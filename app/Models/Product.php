<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Product extends Model
{
    protected $fillable =[
        'name',
        'price',
        'quantity',
        'user_id'
    ];

       //one to one relationship to user
    public function user(){
        return $this->belongsTo(User::class);
    }



   // many to many relationship to orders
    public function order(){
        return $this->hasMany(Order::class);
    }




    use HasFactory;
}
