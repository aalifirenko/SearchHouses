<?php

namespace App\Http\Controllers\Api\House;

use App\Http\Controllers\Controller;
use App\Models\House;
use App\Http\Resources\House as HouseResource;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function __invoke(Request $request)
    {
        $query = $request->input('q', '');

        $houses = House::where('name', 'LIKE', '%' . $query . '%')
            ->orWhere('price', $query)
            ->orWhere('bedrooms', $query)
            ->orWhere('bathrooms', $query)
            ->orWhere('bathrooms', $query)
            ->orWhere('storeys', $query)
            ->orWhere('garages', $query)
            ->get();

        return HouseResource::collection($houses);
    }
}
