<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChampionshipControllers extends Controller
{
    function tranferDadosJson()
    {
        return  json_decode(file_get_contents(storage_path('app\ano2018.json')), true);
    }

    function getDadosEquipes()
    {
        $equipes = $this->tranferDadosJson()['equipes'];
        return $equipes;
    }
}
