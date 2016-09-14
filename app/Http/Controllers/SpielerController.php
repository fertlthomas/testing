<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Spieler;
use App\Team;

class SpielerController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showInsertAction(Request $request, $id)
    {

        return view('insert_spieler', [
            "team_id"=>$id
        ]);
    }

    /**
     * Insert into Database
     *
     * @return \Illuminate\Http\Response
     */
    public function insertAction(Request $request, $id)
    {
        $spieler = new Spieler();
        $spieler->name = $request->name;
        $spieler->position = $request->position;
        $spieler->herkunft = $request->herkunft;
        $spieler->nummer = $request->nummer;
        $spieler->team_id = $id;
        $spieler->save();

        /*-----------------*/

        return redirect('Teams/'.$id.'/Spieler');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showAction($id)
    {
        $spielers = Spieler::where('team_id',$id)->get();
        //return new Response($spielers);
        return view('spieler', [
            "spielers"=>$spielers
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showUpdateAction($id, $id_sp)
    {
        $spielers = Spieler::find($id_sp);
        return view('update_spieler', [
            "team_id"=>$id,
            "spieler"=>$spielers
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateAction(Request $request, $id_sp)
    {
        $teams = Spieler::find($id_sp);

        $teams->sportart = $request->sportart;
        $teams->name = $request->name;
        $teams->ort = $request->ort;
        $teams->marktwert = $request->marktwert;

        $teams->save();

        return redirect('Teams');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteAction($id, $id_sp)
    {
        Spieler::find($id_sp)->delete();

        return redirect('Teams/'.$id.'/Spieler');
    }
}
