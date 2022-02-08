<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function login() {
        return view("auth.login");
    }
    public function signup() {
        return view("auth.signup");
    }
    public function reset_password() {
        return view("auth.reset-password");
    }
    public function post_login(Request $request) {
        $request->validate([
            "email" => "required",
            "password" => "required"
        ]);
        $credentials = $request->only(["email", "password"]);
        if(Auth::attempt($credentials)){
            return redirect()->route("profile");
        }
        return redirect()->back()->withWarning("Invalid Email Address/Password Provided");
    }
    public function post_signup(Request $request) {
        $request->validate([
            "email" => "required|unique:users",
            "password" => "required|confirmed|min:6",
            "firstname" => "required",
            "lastname" => "required",
            "phone" => "required"
        ]);
        $user = new User();
        $user->firstname = ucwords($request->firstname);
        $user->lastname = ucwords($request->lastname);
        $user->email = strtolower($request->email);
        $user->password = Hash::make($request->password);
        $user->phone = ($request->phone);
        $user->save();
        return redirect()->route("login")->withSuccessReport("Account created successfully, please login..");
    }
    public function post_reset_password(Request $request) {
        $request->validate([
            "email" => "required"
        ]);
        $user = User::where("email", $request->email)->first();
        if($user){
            $new_password = strtoupper(Str::random(6));
            $user->password = Hash::make($new_password);
            $user->update();
            //EMAIL NEW PASSWORD
        return redirect()->back()->withSuccessReport("Password reset successful, new tempororay password has been sent to your mail box. Please use that to login and change your password.");
        }
        return redirect()->back()->withWarning("Email address not registered to any user on this system.");
    }
    public function profile() {
        return view("user.profile");
    }
    public function dashboard() {
        return view("user.dashboard");
    }
    public function chats() {
        return view("user.chats");
    }
    public function favorites() {
        return view("user.favorites");
    }
    public function purchases() {
        return view("user.purchases");
    }
    public function searched() {
        return view("user.profile");
    }
    public function viewed() {
        return view("user.viewed");
    }
    public function post_profile(Request $request) {
        $request->validate([
            "firstname" => "required",
            "lastname" => "required",
            "phone" => "required"
        ]);
        $user = User::findOrFail(Auth::id());
        $user->firstname = ucwords($request->firstname);
        $user->lastname = ucwords($request->lastname);
        $user->country = ucwords($request->country);
        $user->state = ucwords($request->state);
        $user->address = ucwords($request->address);
        $user->phone = ($request->phone);
        $user->update();
        return redirect()->back()->withSuccessReport("Account updated successfully..");
    }
    public function change_password() {
        return view("user.change-password");
    }
    public function post_change_password(Request $request) {
        $request->validate([
            "password" => "min:6|required|confirmed"
        ]);
        $user = User::findOrFail(Auth::id());
        if(Hash::check($request->current_password, $user->password)){
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect()->back()->withSuccessReport("Account password changed successfully..");
        }
        return redirect()->back()->withError("Old password incorrect.");
    }
    public function logout() {
        Auth::logout();
        return redirect()->route("home")->withError("Account logged out successfully.");
    }
}
