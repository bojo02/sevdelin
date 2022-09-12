<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Email;

class SubscribeController extends Controller
{
    public function subscribe(Request $request){

        $email = Email::where('email', $request->email)->first();

        if(!empty($email)){
            $alert = view('pages.components.alert')->with('alert_success', 'You are already subscribed!')->render();

            return response()->json(['alert' => $alert]);
        }
        else{
            Email::create([
                'email' => $request->email,
            ]);
        }

       

        $alert = view('pages.components.alert')->with('alert_success', 'You were subscribed, we will sent you the best offers!')->render();

        return response()->json(['alert' => $alert]);
    }
    public function unsubscribe($id){
        Email::destroy($id);

        return redirect(route('home'))->with('alert_success', 'You were unsubscribed!');
    }

}
