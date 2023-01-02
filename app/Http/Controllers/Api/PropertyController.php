<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\PropertyResource;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends ApiController
{
    public function getProperties(Request $request) {
        $properties = Property::getProperties($request);
        return $this->respond([
            'status' => true,
            'message' => 'Properties has been fetched succefully!',
            'data' => [
                'properties' => PropertyResource::collection($properties)
            ],
        ]);

    }

    public function storeProperty(Request $request) {

        $property = Property::storeProperty($request);
        return $this->respond([
            'status' => true,
            'message' => 'Property has been stored successfully!',
            'data' => [
                'property' => new PropertyResource($property)
            ],
        ]);
    }

    public function updateProperty(Request $request) {

        // $request->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        // ]);

        $property = Property::updateProperty($request);
        return $this->respond([
            'status' => true,
            'message' => 'Property has been updated successfully!',
            'data' => [
                'property' => new PropertyResource($property)
            ],
        ]);
    }
}
