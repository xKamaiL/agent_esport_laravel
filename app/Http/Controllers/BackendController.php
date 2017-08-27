<?php

namespace App\Http\Controllers;

use App\Models\ListMerchants;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BackendController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $List = ListMerchants::query()->get();
        return view('backend/home.index', compact('List'));
    }
    public function remove($id){
        ListMerchants::query()->where("id","=",$id)->delete();
        return redirect()->back()->withInput();
    }
    public function add(Request $request){
        $input = $request->all();
        if ($request->hasFile('picture')) {
            $destinationPath = '/uploads/picture/';
            $fileName        = time().'.'.$request->file('picture')->getClientOriginalExtension();
            $request->file('picture')->move(public_path($destinationPath), $fileName);
            if(!is_dir(public_path($destinationPath))) {
                mkdir($destinationPath);
            }
            $image = url($destinationPath.$fileName);
        }else{
            return redirect()->back()->withInput()->with('alert', 'No Picture!');
        }
        if ($request->hasFile('personal')) {
            $destinationPath = '/uploads/personal/';
            $fileName        = time().'.'.$request->file('personal')->getClientOriginalExtension();
            $request->file('personal')->move(public_path($destinationPath), $fileName);
            if(!is_dir(public_path($destinationPath))) {
                mkdir($destinationPath);
            }
            $image_personal = url($destinationPath.$fileName);
        }else{
            return redirect()->back()->withInput()->with('alert', 'No Picture!');
        }
        ListMerchants::query()->insert([
            "name" => $input['name'],
            "personal" => $image_personal,
            "picture" => $image,
            "address" => $input['address'],
            "facebook" => $input['facebook'],
            "number" => $input['number'],
            "created_at" => Carbon::today(),
        ]);
        return redirect()->back()->withInput()->with('alert', 'OK!');
    }
    public function edit(Request $request){
        $id = $request->input("id");
        $input = $request->all();

        if ($request->hasFile('picture')) {
            $destinationPath = '/uploads/picture/';
            $fileName        = time().'.'.$request->file('picture')->getClientOriginalExtension();
            $request->file('picture')->move(public_path($destinationPath), $fileName);
            if(!is_dir(public_path($destinationPath))) {
                mkdir($destinationPath);
            }
            $image = url($destinationPath.$fileName);
        }else{
            $image =  ListMerchants::query()->where("id","=",$id)->select("picture")->first();
            $image = $image->picture;
        }

        ListMerchants::query()->where("id","=",$id)->update([
            "name" => $input['name'],
            "picture" => $image,
            "address" => $input['address'],
            "facebook" => $input['facebook'],
            "number" => $input['number'],
            "updated_at" => Carbon::today(),
        ]);
        return redirect()->back()->withInput();
    }
}
