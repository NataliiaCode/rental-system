<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Review;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{

    public function index()
    {
        $reviews = Review::with('property')->paginate(10);
        $properties = Property::all(); // Отримати всі об'єкти

        return view('reviews.index', compact('reviews', 'properties'));
    }



    public function create()
    {
        $properties = Property::all(); // Додайте цю лінію для отримання всіх об'єктів
        return view('reviews.create', compact('properties'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'comment' => 'required|string|max:255',
            'property_id' => 'required|integer',

        ]);

        $review = new Review($validatedData);

        // Замість $review->author = auth()->user()->name; 
        // Додаємо author 
        $review->author = auth()->user()->name ?? 'Анонім'; // Якщо користувач не авторизований, то буде "Анонім"

        $review->save();

        return redirect()->route('reviews.index')->with('success', 'Відгук додано');
    }





    public function edit(Review $review)
    {
        return view('reviews.edit', compact('review'));
    }


    public function update(Request $request, Review $review)
    {
        $request->validate([

            'comment' => 'required',
        ]);

        $review->update([

            'comment' => $request->input('comment'),
        ]);

        return redirect()->route('properties.show', $review->property)->with('success', 'Відгук успішно оновлено.');
    }

    public function destroy(Review $review)
    {
        $review->delete();

        return redirect()->route('properties.show', $review->property)->with('success', 'Відгук успішно видалено.');
    }
}
