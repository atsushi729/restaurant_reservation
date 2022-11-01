<?php

namespace App\Usecase\Home;

use App\Models\Category;

class IndexUsecase
{
    public function run()
    {
        $specials = Category::where('name', 'specials')->first();

        if (!$specials) {
            $specials = Category::all()->first();
            return $specials;
        }
        return $specials;
    }
}
