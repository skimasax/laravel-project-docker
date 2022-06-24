<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class PostController extends Controller
{
        public function index(Request $req){
            $posts= post::get();
            return view('welcome')->with(['posts' => $posts]);
        }


        public function getPost(Request $req, $id){
            $data= Post::find($id);
            return view('posts')->with(['data' => $data]);
        }

        public function search(Request $req){
            $searchinfo=$req->search;
            $data=Post::where('title','LIKE', '%'.$searchinfo.'%')->get();
            // dd($data);
            return view('searchpost')->with(['data' => $data]);
        }
        
}
