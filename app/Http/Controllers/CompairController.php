<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Compair;

use DB;

class CompairController extends Controller
{
    public function index(){

        return 'helloe';
    
    }

    public function store(Request $request){


        $compair = new Compair;

        $compair = $request->all();

        $compair->save();

        return 'SuccessFull';

    }
}
