<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VedioModel;

class ListController extends Controller
{
    //
    public function vediolist()
    {
        $cc=VedioModel::all();
       return view('vedio/vedio',['cc'=>$cc]);
    }
    public  function list(Request $request)
    {
        $pid=$_GET['pid'];
        $cc=VedioModel::where(['fid'=>$pid])->first();
        return view('list.list',['cc'=>$cc]);
    }

}
