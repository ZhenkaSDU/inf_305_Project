<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\film;
class All_controllers_functions extends Controller
{
    function bestThree(){
        $data = DB::statement('exec bestThree');
        return $data;
    }

    function limitation(){
        $data = DB::statement('exec limitation');
        return $data;
    }

    function year(){
        $data = DB::statement('exec limitation');
        return $data;
    }

    function findMovieByCountry(){
        $data = DB::statement('exec limitation');
        return $data;
    }

}

