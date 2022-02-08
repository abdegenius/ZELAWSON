<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function add($id) {
        $wishlist_count = Wishlist::where("user_id", Auth::id())->where("property_id", $id)->count();
        if($wishlist_count == 0){
            $wishlist = new Wishlist();
            $wishlist->user_id = Auth::id();
            $wishlist->property_id = $id;
            $wishlist->save();
            return redirect()->back()->withSuccess("Property added to wishlist.");
        }
        else{
            Wishlist::where("user_id", Auth::id())->where("property_id", $id)->delete();
            return redirect()->back()->withSuccess("Property removed to wishlist.");
        }
    }

    public function index() {
        $wishlists = Wishlist::where("user_id", Auth::id())->paginate(12);
        return view("wishlist.index", [
            "wishlists" => $wishlists
        ]);
    }
}
