<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseApiController;
use App\Models\House;
use Illuminate\Http\Request;

class HousesController extends BaseApiController
{
    public function get_houses(Request $request)
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
        $this->status = true;
        $this->data = $houses;
        return $this->_response();
    }
}
