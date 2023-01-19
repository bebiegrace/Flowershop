<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
class ProductController extends Controller
{
    public function allproduct()
    {
        return product::all();
    }


    public function storeproduct(Request $request)
    {
        return product::create([

        'name' => $request->name,
        'price' => $request->price,
        'quantity' => $request->quantity,
        'user_id' => $request->user_id
        ]);

    }

    public function showproduct($id)
    {
        return product::where('id', $id)->first();

    }

    public function updateproduct(Request $request, $id)
    {
        //find the gracebebie youre going to update
        product::find($id)->update([
        'name' => $request->name,
        'price' => $request->price,
        'quantity' => $request->quantity
        ]);
    }

    public function destroyproduct($id)
    {
        return product::find($id)->delete();
    }
}
