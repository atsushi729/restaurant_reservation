<?php

namespace App\Http\Responders\Home;

class IndexResponder
{
    public function show($specials)
    {
        return view("welcome", compact("specials"));
    }
}
