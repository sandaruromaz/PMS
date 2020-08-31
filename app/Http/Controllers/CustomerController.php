<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\customer;

class CustomerController extends Controller
{
    public function store(Request $request){

        $customer=new customer;

         $customer->name=$request->name;
         $customer->nic=$request->nic;
         $customer->email=$request->email;
         $customer->telephone1=$request->mobile;
         $customer->address=$request->address;
         $customer->behavior=$request->behavior;
         $customer->telephone2=$request->home;
         $customer->cusID= IdGenerator::generate(['table' => 'customers','field'=>'cusID', 'length' => 10, 'prefix' =>'CUS-']);

         $customer->save();

    }

    public function NICAutocompleate(Request $request){

        $term=$request->term;
        $data= customer::where('nic','LIKE','%'.$term.'%')
        ->take(10)
        ->get();
        $results=array();
        foreach($data as $key=>$v)
        {
            $results[]=array('nic'=>$v->nic,
                             'name'=>$v->name,
                             'cusID'=>$v->cusID,
                            'address'=>$v->address);
        }

        return response()->json($results);
        

    }
}
