<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tournament;

class TournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $tournaments = Tournament::all();
        //return view('tournaments', compact('tournaments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required',
            'date'        => 'required'
        ]);

        $tournament = new Tournament();
        $tournament->name   = $request->name;
        $tournament->tournament_date   = $request->date;

        $tournament->save();

        return $tournament;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tournament = Tournament::find($id);

        return $tournament;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tournament $tournament)
    {
        // $request->validate([
        //     'name'        => 'required',
        //     'date'       => 'required'
        // ]);

        $tournament = new Tournament();
        $tournament->name             = $request->name;
        $tournament->tournament_date  = $request->date;

        $tournament->update();

        return $tournament;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tournament = Tournament::find($id);

        if(is_null($tournament)){
            return response()->json("No se pudo realizar correctamente borrado",404);
        }

        $tournament->delete();

        return response()->noContent();
    }
}
