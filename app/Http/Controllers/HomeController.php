<?php

namespace App\Http\Controllers;

use App\Models\ListMerchants;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $List = ListMerchants::query()->get();
        return view('frontend.home.index', compact('List'));
    }
}
