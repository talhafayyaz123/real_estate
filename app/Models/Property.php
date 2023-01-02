<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\support\Str;

class Property extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name','number','description','price','property_image','type','status','user_id'];

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
        $properties = Property::all();
        return $properties;
    }

    public static function storeProperty($request) {
    
        $property = new self($request->all());
        $property->status = $request->boolean('status');
        if ($request->has('property_image')) {
            $property->property_image = self::uploadPropertyImage($request,'property_image');
        }
        $property->save();
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

