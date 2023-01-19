<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Order extends Model
{
    protected $fillable =[
        'name',
        'amount',
        'quantity',
        'address',
        'user_id'
    ];
    use HasFactory;

    //one to one relationship to user
    public function user(){
        return $this->belongsTo(User::class);
    }


    //many to many relationship to order

    public function product(){
        return $this->belongsToMany(Product::class)->withPivot(['quantity', 'sub_total']);
    }


}
