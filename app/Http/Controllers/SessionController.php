<?php

namespace App\Http\Controllers;

use App\Models\Session;
use App\Models\Client;
use App\Models\Trainer;
use App\Models\Training;
use App\Models\Exercice;
use App\Http\Requests\StoreSessionRequest;
use App\Http\Requests\UpdateSessionRequest;
use App\Http\Requests\UpdateTrainingRequest;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(StoreSessionRequest $request)
    {
        //
        $exercices = Exercice::all();
        $client = Client::find($request['client']);
        $trainer = Trainer::find($request['trainer']);

        return view('session.form')
            ->with(['exercices' => $exercices, 'client' => $client, 'trainer' => $trainer]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSessionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSessionRequest $request)
    {
        //
        $session = new Session();
        $session->day = $request["day"];
        $session->client_id = $request["client"];
        $session->save();

        for ($i = 0; $i < count($request["theExercice"]); $i++) {
            $training = new Training();
            $training->weight = $request["weight"][$i];
            $training->repetition = $request["repetition"][$i];
            $training->time = $request["time"][$i];
            $training->exercice_id = $request["theExercice"][$i];
            $training->session_id = $session->id;
            $training->remark = $request["remark"][$i];
            $training->save();
        }
        
        $trainer = Trainer::find($request["trainer"]);
            
        return view('trainer.index')
            ->with('trainer', $trainer);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Session  $session
     * @return \Illuminate\Http\Response
     */
    public function show(Session $session)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Session  $session
     * @return \Illuminate\Http\Response
     */
    public function edit(StoreSessionRequest $request)
    {
        //
        $exercices = Exercice::all();
        $client = Client::find($request['client']);
        $trainer = Trainer::find($request['trainer']);
        $training = Training::find($request['training']);
        // dd($training);
        return view('session.edit')
            ->with(['exercices' => $exercices, 'client' => $client, 'trainer' => $trainer, 'training' => $training]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTrainingRequest  $request
     * @param  \App\Models\Session  $session
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTrainingRequest $request, Training $training)
    {
        //
        $training = Training::find($request["trainingid"]);

        $training->weight = $request["weight"];
        $training->repetition = $request["repetition"];
        $training->time = $request["time"];
        $training->exercice_id = $request["exercice"];
        $training->remark = $request["remark"];
        $training->save();

        $trainer = Trainer::find($request["trainer"]);
        return view('trainer.index')
            ->with('trainer', $trainer);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Session  $session
     * @return \Illuminate\Http\Response
     */
    public function destroy(Session $session)
    {
        //
    }
}
