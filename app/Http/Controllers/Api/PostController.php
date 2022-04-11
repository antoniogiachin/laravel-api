<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //con chiamata al db prelevo tutti i post
        $posts = Post::all();

        //ritorno un json
        return response()->json(
            [
                'data' => $posts,
                'success'=> true,
            ]
        );
    }

   
}
