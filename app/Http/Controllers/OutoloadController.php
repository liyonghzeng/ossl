<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OutoloadController extends Controller
{
    //
    public function index()
    {
       $ccc= file_get_contents("php://input");
       file_put_contents("/log/a.log",$ccc,FILE_APPEND);
    }
}
