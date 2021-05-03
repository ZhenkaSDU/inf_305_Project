<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TestController extends Controller{

    public function sp(){
        $blog = DB::statement('

        select (exec welcome_msgJune)  from films f, country_flags c
        where rownum <= 30 and cast is not null and f.country = c.country
        order by title
        asc');
        return view('index')->with('blog', $blog);
    }

    public function test_title(){
        $blog = DB::select('select f.*, c.image_url from films f, country_flags c
                            where rownum <= 30 and cast is not null and f.country = c.country
                            order by title
                            asc');
        return view('index')->with('blog', $blog);
    }
    public function test_year(){
        $blog = DB::select('select f.*, c.image_url from films f, country_flags c
                            where rownum <= 30 and cast is not null and f.country = c.country
                            order by release_year asc');
        return view('index')->with('blog', $blog);
    }
    public function test_country(){
        $blog = DB::select('select f.*, c.image_url from films f, country_flags c
                            where rownum <= 30 and cast is not null and f.country = c.country
                            order by c.country desc');
        return view('index')->with('blog', $blog);
    }
    public function test_duration(){
        $blog = DB::select('select f.*, c.image_url from films f, country_flags c
                            where rownum <= 30 and cast is not null and f.country = c.country
                            order by duration asc');
        return view('index')->with('blog', $blog);
    }
}
?>
