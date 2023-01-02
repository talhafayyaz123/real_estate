<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\support\Str;

class Property extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name','number','description','price','property_image','country','area','type','status','user_id'];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = Str::uuid()->toString();
        });
    }
    public static function getIdByUuid($uuid) {
        return Property::where('uuid',$uuid)->value('id');
    }

    public static function getProperties($request) {
        
        $properties = Property::when($request->name, function ($query, $name) {
            return $query->where('name', 'LIKE', "%{$name}%");
        })
        ->when($request->country, function ($query, $country) {
            if($country == 'all_markets') {
                return $query->orderBy('id');
            } else {
                return $query->where('country',$country);
            }
        })
        ->when($request->type, function ($query, $type) {
            return $query->where('type',$type);
        })
        ->when($request->area, function ($query, $area) {
            return $query->where('area',$area);
        })
        ->when($request->new, function ($query) {
            return $query->whereBetween('properties.created_at', [Carbon::now()->subDays(3)->startOfDay(), Carbon::now()->endofDay()])
                ->orderBy('properties.created_at', 'asc');
        })
        ->when($request->all, function ($query) {
            return $query->orderBy('properties.created_at', 'asc');
        })
        ->when($request->sortBy, function ($query, $sortBy) {
            return $query->orderBy($sortBy, request('sortDesc') == 'true' ? 'asc' : 'desc');
        })
        ->when($request->page, function ($query, $page) {
            return $query->offset($page - 1);
        })
        ->paginate($request->perPage);
        return $properties;
    }

    public static function storeProperty($request) {
    
        $property = new self($request->all());
        $property->status = $request->boolean('status');
        if ($request->has('property_image')) {
            $property->property_image = self::uploadPropertyImage($request,'property_image');
        }
        $property->save();
        return $property;
    }

    public static function updateProperty($request) {
       
        $property = Property::where('uuid',$request->property_uuid)->first();
        $data = $request->all();
        if($request->has('status')) {
            $data['status'] = $request->boolean('status');
        }
        if ($request->has('property_image')) {
            $data['property_image'] = self::uploadPropertyImage($request,'property_image');
        }
        $property->update($data);
        return $property;
    }

    public static function deleteProperty($request) {
        $property = Property::where('uuid',$request->property_uuid)->first();
        $property->delete();
        return $property;
    }

    public static function uploadPropertyImage($request, $file_name)
    {
        $destinationPath = 'uploads/properties/';
        if ($request->hasFile($file_name)) {
            $file = $request->file($file_name);
            $name = time() . random_int(1, 1000000000) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($destinationPath), $name);
            return $destinationPath . $name;
        } else {
            return NULL;
        }
    }
}

