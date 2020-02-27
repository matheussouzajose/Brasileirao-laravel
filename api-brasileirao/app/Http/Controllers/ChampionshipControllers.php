<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChampionshipControllers extends Controller
{
    function getDados()
    {
        $file =  file_get_contents(storage_path('app\ano2018.json'));
        $json = json_decode($file, true);
        return $json['fases'];
        // return 'ok';
    }
}
