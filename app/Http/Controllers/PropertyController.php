<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function all(){
        $total_listings = Property::where("is_live", "1")->count();
        $properties = Property::where("is_live", "1")->where("status", "approved")->orderBy("is_featured", "desc")->paginate(20);
        return view("property.all", [
            "properties" => $properties,
            "total_listings" => $total_listings
        ]);
    }
    public function view($slug){
        $property = Property::where("is_live", "1")->where("status", "approved")->where("slug", $slug)->orderBy("id", "desc")->first();
        if($property){
            $property->views += 1;
            $property->update();
            return view("property.view", [
                "property" => $property
            ]);
        }
        abort(404);
    }
    public function rent(){
        $rental_listings = Property::where("is_live", "1")->where("type", "rent")->count();
        $rentals = Property::where("is_live", "1")->where("status", "approved")->where("type", "rent")->orderBy("is_featured", "desc")->paginate(20);
        return view("property.rent", [
            "rentals" => $rentals,
            "rental_listings" => $rental_listings
        ]);
    }
    public function sell(){
        $sale_listings = Property::where("is_live", "1")->where("type", "sell")->count();
        $sales = Property::where("is_live", "1")->where("status", "approved")->where("type", "sell")->orderBy("is_featured", "desc")->paginate(20);
        return view("property.sell", [
            "sales" => $sales,
            "sale_listings" => $sale_listings
        ]);
    }
}
