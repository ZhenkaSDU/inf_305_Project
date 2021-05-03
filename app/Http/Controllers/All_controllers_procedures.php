<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class All_controllers_procedures extends Controller
{
    function print_film(){
        $data = DB::statement('exec print_film');
        return $data;
    }

    function Update(){
        $data = DB::statement('exec Update');
        return $data;
    }

    function welcome_msg(Request $req){
        $data = DB::statement('exec welcome_msg');
        return $data;
    }

    function Get_director_names(Request $req){
        $columm=$req->dn;
        $data = 'exec Get_director_names(';
        $data .= $$columm;
        $data .= ')';
        return DB::statement($data);
    }
}
