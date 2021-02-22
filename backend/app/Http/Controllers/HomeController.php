<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        // echo "<pre>";
        // var_dump($postsQ = DB::table('posts')
        //     ->select('id', 'title', 'body', 'created_at', 'updated_at',)
        //     ->limit(10)
        //     ->get());
        // echo "</pre>";

        // echo "<pre>";
        // var_dump(collect($postsD = DB::select("SELECT * FROM posts LIMIT 10")));
        // echo "</pre>";

        $postsQ = DB::table('posts')
            ->select('id', 'title', 'body', 'created_at', 'updated_at',)
            ->limit(10)
            ->get();

        $postsD = DB::select("SELECT * FROM posts LIMIT 10");

        return view('home', compact('postsQ', 'postsD'));
    }
}
