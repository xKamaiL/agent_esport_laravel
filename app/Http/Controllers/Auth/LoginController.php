<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function index(){
        return view('auth.login');
    }
    public function postLogin(Request $request){

        $messages = [
            'required'           => 'กรุณาระบุ :attribute',
        ];
        $inputs = $request->all();
        $this->validate($request,[
            'password' => 'required|between:6,64',
        ], $messages);
        $user = User::query()->where('password', "=", $inputs['password'])->first();
        if ($user) {
            Auth::login($user,true);
            return redirect()->intended('/');
        }else {
            return redirect()->route('login')->with(compact('errors'))->withInput()->with(['error' => '<i class="fa fa-close"></i> ชื่อผู้ใช้ หรือรหัสผ่านไม่ถูกต้อง']);
        }
    }
}
