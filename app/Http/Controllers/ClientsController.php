<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;

class ClientsController extends Controller
{
    /*
      * This function is for the landing page of each section
      */
    public function index(){
        $clients = Clients::all();

        return view ('client', [
            'clients' => $clients,

        ]);
    }

    public function show($id){
        return view('details',['id' => $id]);
    }
}
