<?php

namespace App\Http\Controllers\Auth;
use Auth;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
   public function login(Request $request)
   {  

    //lo que mando
    
    // //todos los usuarios solo hay 1
    // $userdb = User::all();
    // //busco directo por email y password que envie
    

    // return " FORMULARIO : " .$email." - ".$pass . 
    // " <br> TODOS : " .    $userdb[0]->email." - ". $userdb[0]->password .
    // " <br>VALIDADO : " . $userValidado[0]->email." - ".$userValidado[0]->password;

// dd($userValidado->id);


    //OJO CON EL BCRYP PARA LA CONTRASEÑA
    // return $request->path();
        $rules =[
            "email"     =>"required|email|string",
            "password"  =>"required|string",
        ];
        
       $credentials = $this->validate($request,$rules);
       $pass = $request->password;
        $email = $request->email;
       //  //Auth::login($user); 
       // $user = User::where('email',$credentials['email'])->where('password',$credentials['password'])->get()[0];
       // // dd($user);
       $user = User::where('email',$email)->where('password',$pass)->first();
       // dd($userValidado);
       if ($user->email == $email && $user->password == $pass) {
           if (Auth::loginUsingId($user->id)) {
             return redirect('/');
            
          }
       }
       // return "nada";
       //http://makeover.com/#popup1
       //redirect()->getUrlGenerator()->previous()
       //
 
       
       return redirect('http://makeover.com/#popup1')
       ->withErrors(['email' => trans('auth.failed')])
       ->withInput(['email' =>$request->email]);
   }
   public function logout()
   {
       Auth::logout();
       return redirect('/');
   }

//joandres098@gmail.com
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