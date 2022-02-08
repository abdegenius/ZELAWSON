<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $total_listings = Property::where("is_live", "1")->count();
        $featured_listings = Property::where("is_live", "1")->where("status", "approved")->where("is_featured", "1")->orderBy("id", "desc")->take(12)->get();
        return view("index", [
            "total_listings" => $total_listings,
            "featured_listings" => $featured_listings
        ]);
    }
    public function about() {
        return view("page.about-us");
    }
    public function contact() {
        return view("page.contact-us");
    }
    public function terms() {
        return view("page.terms-and-conditions");
    }
    public function privacy() {
        return view("page.privacy-policy");
    }
}
