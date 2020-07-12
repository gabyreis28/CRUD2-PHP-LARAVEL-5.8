<?php

use Illuminate\Http\Request;

    Route::get('/', function () {
        return view('welcome');
    });

    // Route::resource:execulta todos os metodos (index,create,store,show,edit,update,destroy)
    Route::resource('clientes','ClienteController');