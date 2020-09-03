<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\item;

class Jobcontroller extends Controller
{
    public function selectitem(Request $request){

        $cusID=$request->cusID;
        $selectitems=item::where('cusID','=',$cusID)->get();
        $results=array();
        foreach($selectitems as $key=>$v)
        {
            $results[]=array('itemname'=>$v->itemname,
                             'quality'=>$v->quality,
                             'weight'=>$v->weight,
                             'mxamount'=>$v->mxamount,
                             'loan'=>$v->loan,
                             'cusID'=>$v->cusID,
                            'itemID'=>$v->itemID);
        }
        return response()-> json($results);
        

    }
}
