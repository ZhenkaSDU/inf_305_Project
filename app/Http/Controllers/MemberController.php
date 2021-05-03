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
    function update(Request $req){
        $show_id = $req->show_id;
        $str = 'select * from films where show_id = \'';
        $str .= $show_id;
        $str .= '\'';
        $data = DB::select($str);
        $data['type']=$req->type;
        $data['title']=$req->title;
        $data['director']=$req->director;
        $data['cast']=$req->cast;
        $data['country']=$req->country;
        $data['date_added']=$req->date_added;
        $data['release_year']=$req->release_year;
        $data['rating']=$req->rating;
        $data['duration']=$req->duration;
        $data['listed_in']=$req->listed_in;
        $data['description']=$req->description;

        $upd_str = 'update films set type = \'';
        $upd_str .= $data['type'];
        $upd_str .= '\', title = \'';
        $upd_str .= $data['title'];
        $upd_str .= '\', director = \'';
        $upd_str .= $data['director'];
        $upd_str .= '\', cast = \'';
        $upd_str .= $data['cast'];
        $upd_str .= '\', country = \'';
        $upd_str .= $data['country'];
        $upd_str .= '\', date_added = \'';
        $upd_str .= $data['date_added'];
        $upd_str .= '\', release_year = \'';
        $upd_str .= $data['release_year'];
        $upd_str .= '\', rating = \'';
        $upd_str .= $data['rating'];
        $upd_str .= '\', duration = \'';
        $upd_str .= $data['duration'];
        $upd_str .= '\', listed_in = \'';
        $upd_str .= $data['listed_in'];
        $upd_str .= '\', description = \'';
        $upd_str .= $data['description'];
        $upd_str .= '\' ';
        $upd_str .= 'where show_id = \'';
        $upd_str .= $show_id;
        $upd_str .= '\'';
        DB::statement($upd_str);

        return redirect('data_edit');
    }
}
