<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class PostController extends Controller
{
        public function index(Request $req){
            $data= post::get();
            return view('welcome')->with(['data' => $data]);
        }

        public function getPost(Request $req, $id){
            $data= Post::find($id);
            return view('welcome')->with(['data' => $data]);
        }
}
