<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use App\Test;

class TestController extends Controller
{
    /*
     * This function is for the landing page of each section
     */
    public function index(){
        $test = Test::all();

        return view ('test', [
            'test' => $test,

        ]);
    }

    public function show($id){
        return view('details',['id' => $id]);
    }
}
