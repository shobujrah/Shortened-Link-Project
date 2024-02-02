<?php

namespace App\Http\Controllers;



use Str;
use App\Models\ShortendLink;
use App\Models\Client;
use Illuminate\Http\Request;
class ShortLinkController extends Controller
{

    public function home(){
        // $shortlinks= ShortendLink::all();
        // , compact('shortlinks')
        return view('frontend.pages.home');

    }
    public function create(){
        $shortlinks= ShortendLink::all();
        return view('frontend.pages.create', compact('shortlinks'));
    }

   public function store(Request $request){
        $request->validate([
            'shortlink'=>'required|url'
        ]);

        $input['client_id']= auth('client')->user()->id;
        $input['shortlink'] = $request->shortlink;
        $input['code'] = Str::random(6);


        ShortendLink::create($input);

        return redirect()->route('index')->with('msg','Shortend link create successfully.');
   }

    public function shortendlink($code){

        $find = ShortendLink::where('code',$code)->first();
        return redirect($find->shortlink);
        // ->withdDefault(['code' => 'Code Not '])
    }


    public function myshortlink($id)
    {
      // dd($id);
      $shortlinks=ShortendLink::where('client_id',$id)->get();
      return view('frontend.pages.customers.myshortlink', compact('shortlinks'));
    }


}
