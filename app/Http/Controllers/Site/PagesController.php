<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;

class PagesController extends Controller
{
    //
    public function home()  {
        $lservices = Services::get();
        return view('site.pages.home', compact('lservices'));
    }
}
