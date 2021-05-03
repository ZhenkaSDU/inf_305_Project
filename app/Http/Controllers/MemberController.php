<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\film;
class MemberController extends Controller
{
    function list(){
        $data = film::all();
        return view('data_edit', ['films'=>$data]);
    }

    function delete($show_id){
        $str = 'delete from films where show_id = \'';
        $str .= $show_id;
        $str .= '\'';
        DB::statement($str);
        return redirect('list');
    }

    function showData($show_id){
        $str = 'select * from films where show_id = \'';
        $str .= $show_id;
        $str .= '\'';
        $data = DB::select($str);
        return view('edit')->with('data', $data);
    }
}
