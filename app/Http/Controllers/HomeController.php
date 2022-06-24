<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    //
    public function subscribe(Request $req){

            Home::insert([
                'email' => $req->email,
            ]);

            return back()->with("msg", "<div class='alert alert-success'>Subscribed Successfully</div>");
    }
}
