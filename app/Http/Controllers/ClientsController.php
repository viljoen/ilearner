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
        //$clients = Clients::all()
        //$clients = Clients::orderBy ('age', 'desc')->get();
        //$clients = Clients::where('first_name', 'Keaton')->get();
        $clients = Clients::latest()->get();

        return view ('clients.index', [
            'clients' => $clients,

        ]);
    }

    public function show($id){
        return view('clients.show',['id' => $id]);
    }

    public function create(){
        return view ('clients.create');
    }
}
