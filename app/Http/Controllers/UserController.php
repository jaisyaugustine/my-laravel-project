<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function get_user()
    {
        //return "This is Jaisy Augustine";
        return view("user");
    }

    public function about_user($name)
    {
        return view("about",["name" => $name]);
    }

    public function login()
    {
        return view("admin.login");
    }

    public function home()
    {
        $name = "Ichappi";
        $users = ["anil","Anu","Isa","Tony","Ethan"];
        return view("home",["name" => $name,"users" => $users]);
    }
    public function add_user(Request $req)
    {
       echo $req->email;
    }
}

