<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Trainer;
use App\Models\Exercice;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(StoreClientRequest $request)
    {
        //
        $clients = DB::select("select * from clients where email = '" . $request["email"] . "' AND password = '" . $request["password"] . "'");

        if ($clients != null) {
            $client = Client::find($clients[0]->id);
            $exercices = Exercice::all();
            
            return view('client.index')
            ->with(['exercices' => $exercices, 'client' => $client]);
        } else {
            return view('client.login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $trainer_id)
    {
        //
        return view('client.form')
        ->with('trainer_id', $trainer_id["trainer_id"]);;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClientRequest $request)
    {
        // 
        // dd($request);
        $client = new Client();
        $client->email = $request["email"];
        $client->password = $request["password"];
        $client->name = $request["name"];
        $client->lastName = $request["lastName"];
        $client->telf = $request["telf"];
        $client->age = $request["age"];
        $client->gender = $request["gender"];
        $client->trainer_id = $request["trainer_id"];
        $client->save();

        $trainer = Trainer::find($request["trainer_id"]);

        return view('trainer.index')
            ->with('trainer', $trainer);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClientRequest  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
        dd($client);
    }

    public function login() {
        return view('client.login');
    }

    public function delete(StoreClientRequest $request) {
        // return view('client.login');
        $client = Client::find($request['client']);
        $client->delete();
        
        $trainer = Trainer::find($request['trainer']);

        return view('trainer.index')
            ->with('trainer', $trainer);
    }

    public function sessions(StoreClientRequest $request) {
        $exercices = Exercice::all();
        $client = Client::find($request['client']);
        $trainer = Trainer::find($request['trainer']);

        return view('client.sessions')
            ->with(['exercices' => $exercices, 'client' => $client, 'trainer' => $trainer]);
    }
}
