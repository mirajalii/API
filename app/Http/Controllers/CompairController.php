<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Compair;

use DB;

class CompairController extends Controller
{
    public function index(){

        return 'helloe';
    
    }

    public function store(Request $request)
    {
        
        $compair = new Compair;
        
        $inputs = $request->all();
        
        $compair = $compair->create($inputs);

        return $this->success($compair);

    }
}
