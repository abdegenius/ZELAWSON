<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request){
        $total_listings = Property::where("is_live", "1")->where("status", "approved")->orWhere("address", "like", "%".$request->keywords."%")->orWhere("state", "like", "%".$request->keywords."%")->orWhere("country", "like", "%".$request->keywords."%")->count();
        $properties = Property::where("is_live", "1")->where("status", "approved")->orWhere("address", "like", "%".$request->keywords."%")->orWhere("state", "like", "%".$request->keywords."%")->orderBy("is_featured", "desc")->paginate(20);
        return view("search", [
            "properties" => $properties,
            "total_listings" => $total_listings
        ]);
    }

    public function advanced(Request $request){
        $total_listings = Property::orWhere("is_live", "1")->where("status", "approved")->orWhere("address", "like", "%".$request->keywords."%")->orWhere("state", "like", "%".$request->keywords."%")->orWhere("country", "like", "%".$request->keywords."%")->where("type", $request->type)->orWhere("bedrooms", $request->bedrooms)->orWhere("bathrooms", $request->bathrooms)->count();
        $properties = Property::where("is_live", "1")->where("status", "approved")->where("address", "like", "%".$request->keywords."%")->where("state", "like", "%".$request->keywords."%")->where("type", $request->type)->orWhere("bedrooms", $request->bedrooms)->orWhere("bathrooms", $request->bathrooms)->orderBy("is_featured", "desc")->paginate(20);
        return view("search", [
            "properties" => $properties,
            "total_listings" => $total_listings
        ]);
    }
}
