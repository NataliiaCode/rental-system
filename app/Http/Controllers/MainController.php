<?php

namespace App\Http\Controllers;


use App\Models\Property;
use App\Models\PropertyType;
use App\Models\Region;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $properties = Property::with('propertyType')->get(); // Завантажити всі властивості з їх типами
        $propertyTypes = PropertyType::all();
        // Отримати всі регіони
        $regions = Region::all();
        $region_id = null; // або встановіть значення за замовчуванням
        return view('index', compact('properties', 'propertyTypes', 'regions', 'region_id'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    public function contacts()
    {
        return view('contacts'); // Повертає шаблон для сторінки "Контакти"
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:5',
        ]);

        // dd($request->all());
        // dump($request);
        return 'sendEmail';
    }

    public function about()
    {
        return view('about'); // Повертає шаблон для сторінки "Про нас"
    }



    // Сортування властивостей за типами або цінами

    public function sort(Request $request, $type)
    {
        $properties = Property::with('propertyType');

        switch ($type) {
            case 'type':
                $properties->orderBy('property_type_id');
                break;
            case 'price':
                // Сортування за ціною від меншого до більшого
                $properties->orderBy('price', 'asc');
                break;
            case 'price-desc':
                // Сортування за ціною від більшого до меншого
                $properties->orderBy('price', 'desc');
                break;
            case 'date-asc':
                // Сортування за датою від старого до нового
                $properties->orderBy('created_at', 'asc');
                break;
            case 'date-desc':
                // Сортування за датою від нового до старого
                $properties->orderBy('created_at', 'desc');
                break;
            default:
                // Якщо тип сортування невідомий, сортувати за датою створення
                $properties->orderBy('created_at', 'desc');
        }

        $properties = $properties->get();

        $propertyTypes = PropertyType::all();
        $regions = Region::all();
        // return view('index', compact('properties', 'propertyTypes'));
        $region_id = null;
        return view('index', compact('properties', 'propertyTypes', 'regions', 'region_id'));
    }


    // додати функціонал пошуку 

    public function search(Request $request)
    {
        // $city = $request->input('city');
        $region_id = $request->input('region_id'); // Отримати значення з запиту
        $property_type = $request->input('property_type');
        $price_from = $request->input('price_from');
        $price_to = $request->input('price_to');
        $square_footage_from = $request->input('square_footage_from');
        $square_footage_to = $request->input('square_footage_to');
        $bathrooms = $request->input('bathrooms');
        $rooms = $request->input('rooms');

        // Будуємо запит до бази даних
        $properties = Property::query();
        // Фільтрація за region (замість city)
        if ($region_id) {
            $properties->where('region_id', $region_id);
        }



        // Фільтрація за типом власності
        if ($property_type) {
            $properties->where('property_type_id', '=', $property_type);
        }

        // Фільтрація за ціною
        if ($price_from) {
            $properties->where(
                'price',
                '>=',
                $price_from
            );
        }
        if ($price_to) {
            $properties->where(
                'price',
                '<=',
                $price_to
            );
        }

        // Фільтрація за площею
        if ($square_footage_from) {
            $properties->where('square_footage', '>=', $square_footage_from);
        }
        if ($square_footage_to) {
            $properties->where('square_footage', '<=', $square_footage_to);
        }

        // Фільтрація за ванними
        if ($bathrooms) {
            $properties->where('bathrooms', '=', $bathrooms);
        }

        // Фільтрація за кімнатами
        if ($rooms) {
            $properties->where(
                'rooms',
                '=',
                $rooms
            );
        }

        // Отримуємо результати пошуку
        $properties = $properties->get();

        $regions = Region::all(); // Отримати всі регіони

        $propertyTypes = PropertyType::all();

        // Передаємо результати до виду для відображення
        // return view('search.results', compact('properties', 'propertyTypes', 'regions'));


        return view('search.results', compact(
            'properties',
            'region_id',
            'property_type',
            'price_from',
            'price_to',
            'square_footage_from',
            'square_footage_to',
            'bathrooms',
            'rooms',
            'regions',
            'propertyTypes'
        ));
    }



    public function showProperty($id)
    {
        $property = Property::findOrFail($id);
        return view('properties.show', compact('property'));
    }
}
