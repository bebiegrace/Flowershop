<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
class OrderController extends Controller
{
    public function allorder()
    {
        return order::all();
    }


    public function storeorder(Request $request)
    {
        return order::create([

        //    'name' => $request->input('name'),

        'name' => $request->name,
        'price' => $request->price,
        'quantity' => $request->quantity,
        'address' => $request->address,
        'user_id' => $request->user_id

        ]);
    }

    public function showorder($id)
    {
        return order::where('id', $id)->first();

    }

    public function updateorder(Request $request, $id)
    {
        //find the gracebebie youre going to update
        order::find($id)->update([
        'name' => $request->name,
        'price' => $request->price,
        'quantity' => $request->quantity,

        'address' => $request->address
        ]);
    }

    public function destroyorder($id)
    {
        return order::find($id)->delete();
    }
}
