<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;

class AuthController extends Controller
{
    public function indexRegister()
    {
        return view("frontend.pages.auth.register");
    }

    public function register(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required|email|unique:khach_hangs,email",
            "password" => "required|confirmed|min:8"
        ], [
            "name.required" => "Vui lòng nhập tên",
            "email.required" => "Vui lòng nhập email",
            "email.email" => "Vui lòng phải là email",
            "email.unique" => "Email đã sử dụng",
            "password.required" => "Vui lòng nhập mật khẩu",
            "password.min" => "Nhập ít nhất 8 ký tự",
            "password.confirmed" => "Mật khẩu không khớp"
        ]);

        $user = Customer::create([
            "ten_khach_hang" => $request->input("name"),
            "email" => $request->input("email"),
            "password" => Hash::make($request->input("password"))
        ]);


        Auth::guard("customer")->login($user);

        return redirect()->route("home")->with([
            "notify" => "Đăng ký thành công",
            "status" => "success"
        ]);
    }

    public function indexLogin()
    {
        return view("frontend.pages.auth.login");
    }

    public function login(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required|min:8"
        ], [
            "email.required" => "Vui lòng nhập email",
            "email.email" => "Vui lòng phải là email",
            "password.required" => "Vui lòng nhập mật khẩu",
            "password.min" => "Nhập ít nhất 8 ký tự",
        ]);

        $credentials = $request->only("email", "password");
        if (Auth::guard('customer')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('home'))->with([
                "notify" => "Đăng nhập thành công",
                "status" => "success"
            ]);
        } else {
            return back()->withErrors(["error" => "Sai email hoặc mật khẩu"]);
        }
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $tempTheme =  $request->session()->get("theme");
        $request->session()->invalidate();
        session(["theme" => $tempTheme]);
        $request->session()->regenerateToken();

        return redirect("/");
    }
}
