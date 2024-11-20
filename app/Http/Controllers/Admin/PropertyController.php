<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Property;
use App\Models\PropertyType;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Illuminate\Validation\Rules\Enum;

class PropertyController extends Controller
{


    // public function index()
    // {
    //     $properties = Property::with('propertyType')->get();
    //     return view('admin.properties.index', compact('properties'));
    // }

    public function index()
    {
        $properties = Property::with('propertyType', 'images')->get();
        return view('admin.properties.index', compact('properties'));
    }

    // public function show($id)
    // {
    //     $property = Property::findOrFail($id);
    //     return view('admin.properties.show', compact('property'));
    // }

    public function create()
    {
        $propertyTypes = PropertyType::all();
        $regions = Region::all(); // Отримання всіх регіонів
        return view('admin.properties.create', compact('propertyTypes', 'regions')); // Передача змінних до шаблону


    }

    // public function store(Request $request)
    // {
    //     // Валідація даних
    //     $validatedData = $request->validate([
    //         'property_type_id' => 'required',
    //         'region_id' => 'required',
    //         'description' => 'nullable',
    //         'rooms' => 'required',
    //         'bathrooms' => 'required',
    //         'square_footage' => 'required',
    //         'price' => 'required',
    //         'is_renovated' => 'required',
    //         'condition' => 'required',
    //         'availability' => 'required',
    //         // 'image' => 'mimes:jpg,bmp,png',
    //         'images' => 'array',
    //         'images.*' => 'image|mimes:jpg,bmp,png',
    //     ]);


    //     // Створення нової нерухомості
    //     $property = Property::create($validatedData);

    //     // Перевірка успішного створення
    //     if ($property) {
    //         // Збереження зображення (якщо воно завантажене)
    //         if ($request->hasFile('image')) {
    //             // $imagePath = $request->file('image')->store('images'); 
    //             $imagePath = $request->file('image')->store('public/properties');
    //             $property->image = $imagePath; // Не додавайте 'storage/'!
    //             $property->save();
    //         }

    //         return redirect()->route('admin.properties.index')->with('success', 'Нерухомість успішно створена!'); // Перенаправлення на список нерухомості
    //     } else {
    //         // Якщо не вдалося створити, поверніть помилку
    //         return redirect()->back()->withErrors(['error' => 'Помилка створення нерухомості']);
    //     }

    //     // Збереження додаткових зображень (якщо вони завантажені)
    //     if ($request->hasFile('images')) {
    //         foreach ($request->file('images') as $image) {
    //             $imagePath = $image->store('public/properties');
    //             Image::create([
    //                 'property_id' => $property->id,
    //                 'path' => $imagePath,
    //             ]);
    //         }
    //     }

    // }

    public function store(Request $request)
    {
        // Валідація даних
        $validatedData = $request->validate([
            'property_type_id' => 'required',
            'region_id' => 'required',
            'description' => 'nullable',
            'rooms' => 'required',
            'bathrooms' => 'required',
            'square_footage' => 'required',
            'price' => 'required',
            'is_renovated' => 'required',
            'condition' => 'required',
            'availability' => 'required',
            // 'image' => 'image|mimes:jpg,bmp,png',

            'images' => 'array',
            'images.*' => 'image|mimes:jpg,bmp,png',
        ]);

        // Створення нової нерухомості
        $property = Property::create($validatedData);

        // Перевірка успішного створення
        if ($property) {
            // Збереження зображення (якщо воно завантажене)
            // if ($request->hasFile('image')) {
            //     // $imagePath = $request->file('image')->store('images'); 
            //     $imagePath = $request->file('image')->store('public/properties');
            //     $property->image = $imagePath; // Не додавайте 'storage/'!


            // }
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('public/properties');
                $property->image = 'storage/' . $imagePath;
                $property->save(); // Збережіть зміни в базі даних
            }





            // Збереження додаткових зображень (якщо вони завантажені)
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $imagePath = $image->store('public/properties');
                    Image::create([
                        'property_id' => $property->id,
                        'path' => $imagePath,
                    ]);
                }
            }

            return redirect()->route('admin.properties.index')->with('success', 'Нерухомість успішно створена!'); // Перенаправлення на список нерухомості
        } else {
            // Якщо не вдалося створити, поверніть помилку
            return redirect()->back()->withErrors(['error' => 'Помилка створення нерухомості']);
        }
    }

    public function edit(Property $property)
    {
        $propertyTypes = PropertyType::all();
        $regions = Region::all(); // Отримайте всі регіони
        $images = Image::where('property_id', $property->id)->get();
        return view('admin.properties.edit', compact('property', 'propertyTypes', 'regions', 'images'));

        // return view('admin.properties.edit', compact('property', 'propertyTypes', 'regions')); // Передайте всі змінні
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'property_type_id' => 'required',
            'region_id' => 'required',
            'description' => 'nullable',
            'rooms' => 'required',
            'bathrooms' => 'required',
            'square_footage' => 'required',
            'price' => 'required',
            'is_renovated' => 'required',
            'condition' => 'required',
            'availability' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $property = Property::findOrFail($id);



        // Обробка зображення
        if ($request->hasFile('image')) {
            if ($property->image) {
                Storage::delete('public/' . $property->image);
            }
            $imagePath = $request->file('image')->store('public/properties');
            $validatedData['image'] = 'storage/' . $imagePath;
        }




        // Обробка додаткових зображень
        if ($request->hasFile('images')) {
            $images = $request->file('images');
            foreach ($images as $image) {
                $imagePath = $image->store('public/properties');
                Image::create([
                    'property_id' => $id,
                    'path' => $imagePath,
                ]);
            }
        }



        $imageIds = $request->input('images'); // Отримайте масив ID зображень



        // Видалення зображень, які не були передані у формі (видалені)
        $deletedImageIds = []; // Замініть на порожній масив
        if ($imageIds !== null) { // Додайте умову
            $deletedImageIds = array_diff(
                Image::where('property_id', $id)->pluck('id')->toArray(),
                $imageIds
            );
        }
        Image::whereIn('id', $deletedImageIds)->delete();

        // Оновлення порядку зображень
        $order = 1;
        if ($imageIds !== null) {  // Додайте умову
            foreach ($imageIds as $imageId) {
                $image = Image::find($imageId);
                if ($image) {
                    $image->update(['property_id' => $id, 'order' => $order]);
                    $order++;
                }
            }
        }





        $property->update($validatedData);

        return redirect()->route('admin.properties.index');
    }

    public function destroy($id)
    {
        $property = Property::findOrFail($id);
        $property->delete();

        return redirect()->route('admin.properties.index');
    }
}
