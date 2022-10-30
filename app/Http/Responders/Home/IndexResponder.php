<?php

namespace App\Http\Responders\Home;

use App\Http\Controllers\Controller;
use App\Models\Category;

class IndexResponder
{
    public function show()
    {
        $specials = Category::where('name', 'specials')->first();

        if (!$specials) {
            $specials = Category::all()->first();
            return view('welcome', compact('specials'));
        }

        return view('welcome', compact('specials'));
    }
}
