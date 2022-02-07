<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view("index");
    }
    public function about() {
        return view("pages.about-us");
    }
    public function contact() {
        return view("pages.contact-us");
    }
    public function privacy() {
        return view("pages.privacy-policy");
    }
    public function terms() {
        return view("pages.terms-and-conditions");
    }
}

