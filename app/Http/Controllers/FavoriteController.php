<?php

namespace App\Http\Controllers;


use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{

    
    function add(Request $request)
    {

        $property = Property::find($request->id);

        // Отримати назву типу властивості
        $propertyTypeName = $property->propertyType->name;

        //якщо товар вже в кошику
        if ($request->session()->has('cart.' . $property->id)) {
            $qty = $request->session()->get('cart.' . $property->id)['quantity']; // кількість в кошику
            $request->session()->put('cart.' . $property->id . '.quantity', $qty + $request->quantity); // перезаписали кількість
        } else {
            $request->session()->put('cart.' . $property->id, [
                'id' => $property->id,
                'image' => $property->image,
                'title' => $propertyTypeName,
                'price' => $property->price,

            ]);
        }


        return view('favorites.cart');
    }

    // function totalSum(Request $request)
    // {
    //     $totalSum = 0;
    //     foreach (session('cart') as $tour) {
    //         $totalSum += $tour['price'] * $tour['quantity'];
    //     }
    //     $request->session()->put('totalSum', $totalSum);
    // }

    function remove(Request $request)
    {
        $request->session()->forget('cart.' . $request->id);

        return view('favorites.cart');
    }
}
