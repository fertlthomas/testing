<?php
/**
 * Created by PhpStorm.
 * User: fertl
 * Date: 11.04.2016
 * Time: 09:03
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spieler extends Model {

    /*
     * Primary key
     *
     *@var int
     */
    protected $id;

    /*
     * Name
     *
     *@var string
     */
    protected $Name;

    /*
    * Position
    *
    *@var string
    */
    protected $Positions;


    /*
     * Herkunft
     *
     *@var string
     */
    protected $Herkunft;

    /*
     * Trikotnummer
     *
     *@var string
     */
    protected $Trikotnummer;


    public function team()
    {
        return $this->belongsTo('App\models\team');
    }

}