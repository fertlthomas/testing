<?php
/**
 * Created by PhpStorm.
 * User: fertl
 * Date: 04.04.2016
 * Time: 12:00
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model {

    /*
     * Primary key
     *
     *@var int
     */
    protected $id;

    /*
     * Sportart
     *
     *@var string
     */
    protected $Sportart;

    /*
     * Teamname
     *
     *@var string
     */
    protected $Name;

    /*
     * Ort
     *
     *@var string
     */
    protected $Ort;

    /*
     * Martkwert
     *
     *@var string
     */
    protected $Marktwert;

    public function spieler()
    {
        return $this->hasMany('App\models\Spieler');
    }

}