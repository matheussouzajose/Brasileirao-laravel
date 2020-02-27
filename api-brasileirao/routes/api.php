<?php

use Illuminate\Http\Request;

Route::get("ano2018","ChampionshipControllers@tranferDadosJson");
Route::get("equipes","ChampionshipControllers@getDadosEquipes");

