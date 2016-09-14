<?php
/**
 * Created by PhpStorm.
 * User: fertl
 * Date: 11.04.2016
 * Time: 09:16
 */
namespace App\Http\Controllers;

//use App\Models\team;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Team;

class TeamController extends Controller
{
    /**
     * Show a list of Teams
     *
     * @return Response
     */
    public function showAction()
    {
        $teams = Team::all();
        //return new Response($teams);
        return view('home',[
            "teams"=>$teams
        ]);
    }

    /**
     * Show Insert-Form
     *
     */
    public function showInsertAction()
    {
        return view('insert');
    }

    /**
     * @Route ("/")
     *
     * Inserts a Team
     */
    public function insertAction(Request $request)
    {
        
        $teams = new Team;
        $teams->sportart = $request->sportart;
        $teams->name = $request->name;
        $teams->ort = $request->ort;
        $teams->marktwert = $request->marktwert;
        $teams->save();

        /*-----------------*/
        
        return redirect('Teams');
    }

    /**
     * Deletes an Element
     */
    public function deleteAction($id)
    {
        Team::find($id)->delete();

        return redirect('Teams');
    }

    /**
     * Show Update-Form
     *
     */
    public function showUpdateAction($id)
    {
        $teams = Team::find($id);
        return view('update', [
            "team"=>$teams
        ]);
    }

    /**
     * Updates an Element
     */
    public function updateAction(Request $request, $id)
    {

        $teams = Team::find($id);

        $teams->sportart = $request->sportart;
        $teams->name = $request->name;
        $teams->ort = $request->ort;
        $teams->marktwert = $request->marktwert;

        $teams->save();

        return redirect('Teams');
    }
}