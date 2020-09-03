<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\item;

class ArticlesController extends Controller
{
    public function store(Request  $request){

        $item= new item;

        $item->itemname=$request->itemname;
        $item->quality=$request->qulity;
        $item->weight=$request->weigth;
        $item->damage=$request->damage;
        $item->mxamount=$request->maxamount;
        $item->loan=$request->loanamount;
        $item->cusID=$request->cusID;
        $item->itemID=IdGenerator::generate(['table' => 'items','field'=>'itemID', 'length' => 10, 'prefix' =>'ITM-']);;
        $item->save();

        $activetab="articles";
        return view('.Admin.articles')
        ->with('activetab',$activetab);

    }
}
