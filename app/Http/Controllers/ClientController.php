<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Models\ShortendLink;
use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Guard;

class ClientController extends Controller
{
    public function registration(){
        return view('frontend.pages.customers.registration');
    }

    public function store(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required|email:rfc,dns|unique:clients',
            'password'=>'required|min:8'
        ]);

        Client::create([
            'name'=>$request->name,
            'password'=>bcrypt($request->password),
            'email'=>$request->email,
        ]);


        return redirect()->route('registration.successful')->with('msg', 'Registration Successful.');

    }


    public function login (){
        return view('frontend.pages.customers.login');
    }


    public function dologin(Request $request) {



        $credentials=$request->except('_token');

        // dd($credentials);

        if(auth()->guard('client')->attempt($credentials))
        {
            // dd("valid user");
            return redirect()->route('index')->with('msg','Login successfully.');
        }

        else{

        return redirect()->back()->withErrors(['Invalid login information']);
        // dd("invalid user");

         }
    }



    public function customerlogout ()
    {
        auth()->guard('client')->logout();
        return redirect()->route('customer.login')->with('msg','Logout Success');
    }




    public function index(){
        return view('frontend.pages.customers.index');
    }


   public function success(){
        return view('frontend.pages.customers.sucess');
   }


}
