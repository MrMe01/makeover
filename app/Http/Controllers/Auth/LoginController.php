<?php

namespace App\Http\Controllers\Auth;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
   public function login(Request $request)
   {    
    // return $request->path();
        $rules =[
            "email"     =>"required|email|string",
            "password"  =>"required|string",
        ];
       $credentials = $this->validate($request,$rules);

       if (Auth::attempt($credentials)) {
           return redirect('home');
       }
       //http://makeover.com/#popup1
       //redirect()->getUrlGenerator()->previous()
       return redirect('http://makeover.com/#popup1')
       ->withErrors(['email' => trans('auth.failed')])
       ->withInput(['email' =>$request->email]);
   }
}
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

    // use AuthenticatesUsers;

    // /**
    //  * Where to redirect users after login.
    //  *
    //  * @var string
    //  */
    // protected $redirectTo = '/home';

    // *
    //  * Create a new controller instance.
    //  *
    //  * @return void
     
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }