<?php

use Illuminate\Support\Facades\Route;

Route::get('/tabuada/{numero?}', function ($numero) {

    for ($i = 1; $i <= 10; $i++) {
        echo "$numero x $i = " . ($numero * $i) . "<br>";
    }
    return view('tabuada', ['numero' => $numero]);
});

Route::get('/imc/{altura}/{peso}', function ($altura, $peso) {

        $imc = $peso / ($altura * $altura);
            return view ('imc', ['peso' => $imc] );
        }
);


