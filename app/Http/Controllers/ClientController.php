<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Models\Client;
use mysql_xdevapi\Exception;

class ClientController extends Controller
{
    /*
          * This function is for the landing page of each section
          */
    public function index(){
        //$clients = Clients::all()
        //$clients = Clients::orderBy ('age', 'desc')->get();
        //$clients = Clients::where('first_name', 'Keaton')->get();
        $clients = Client::latest()->take(3)->get();
        //$clients = Client::latest()->get();
        return view ('clients.index', [
            'clients' => $clients,

        ]);
    }

    public function show($id){

        $clients = Client::findOrFail($id);
        return view('clients.show',['clients' => $clients]);
    }

    public function create(){
        return view ('clients.create');
    }

    /*
     * Store a new user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request){


            $client = new Client();
            $client->first_name = $request->first_name;
            $client->last_name = $request->last_name;
            $client->email = $request->email;
            $client->age = $request->age;
            $client->interests = $request->interests;
            $client->save();


        return redirect('/client')->with('mssg', 'New User added, view profile below');

    }

    public function destroy($id){
        $client = Client::findOrFail($id);
        $client->delete();

        return redirect('/client');

    }
}
