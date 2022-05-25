<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
class customer extends Controller
{
    public function index()
    {
        return view ('customer');
    }
    public function store(Request $req)
    {
        $req->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'country' => 'required',
                'state' => 'required',
                'address' => 'required',
            ]
            );
            echo "<pre>";
            print_r($req->all());    
        $costomer = new About;// making object of model  class about
        $costomer->name = $req['name'];
        $costomer->email = $req['email'];
        $costomer->password = md5($req['password']);
        $costomer->country = $req['country'];
        $costomer->state = $req['state'];
        $costomer->address = $req['address'];
        $costomer->save();
        
        return redirect('/customer/view');
    }
    public function view(){

        $customer=About::all();
        $data = compact('customer');

        return view('customer_view')->with($data);
    }
    public function destroy($id){
        $customer= About::find($id);
        if(!is_null($customer)){
            $customer->delete();
        }
        return redirect ('customer/view');
    }
}
