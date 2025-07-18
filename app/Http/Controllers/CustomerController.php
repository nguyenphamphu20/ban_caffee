<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;

class CustomerController extends Controller
{
    public function indexCustomer()
    {
        $user = Auth::guard("customer")->user();

        return view("frontend.pages.customer.index", compact("user"));
    }
}