<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;

class WelcomeController extends Controller
{
    public function index()
    {
        $specials = Category::where('name', 'specials')->first();

        if (!$specials) {
            $specials = Category::all()->first();
            return view('welcome', compact('specials'));
        }

        return view('welcome', compact('specials'));
    }

    public function thankyou()
    {
        return view('thankyou');
    }
}
