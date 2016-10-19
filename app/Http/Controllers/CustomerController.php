<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Customer;
use Illuminate\Session\TokenMismatchException;
class CustomerController extends Controller
{
    public  function index(){
        $customers=Customer::all();
        return view('customer',['customers'=>$customers]);

    }


    public function newCustomer(Request $request){
        if($request->ajax()){
            $customer= Customer::create($request->all());
            return response()->json($customer);
        }

    }

    public function getUpdate(Request $request){

   if($request->ajax()){

       $customer=Customer::find($request->id);
       return response($customer);
   }

    }

    public function newUpdate(Request $request){
        if($request->ajax()){
           $customer=Customer::find($request->id);
            $customer->first_name=$request->first_name;
            $customer->last_name=$request->last_name;
            $customer->gender=$request->gender;
            $customer->email=$request->email;
            $customer->phone=$request->phone;
            $customer->save();
            return response($customer);

        }
    }


}
