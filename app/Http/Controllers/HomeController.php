<?php

namespace App\Http\Controllers;

use App\Models\ListMerchants;
use Illuminate\Http\Request;
use Psy\Util\Json;

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
    public function view($id){
        $app = ListMerchants::query()->where("id","=",$id)->first();
        if($app->count() != 0){
            return json_encode([
                "id" => $id,
                "name" => $app->name,
                "facebook" => $app->facebook,
                "address" => $app->address,
                "number" => $app->number,
                "picture" => $app->picture
            ]);
        }else{

        }
    }
}
