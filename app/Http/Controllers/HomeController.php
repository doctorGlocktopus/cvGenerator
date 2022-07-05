<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Address;
use App\Models\Announcement;
use Auth;

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
        $this->user = Auth::User();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function new()
    {
        return view('new');
    }

    public function announcement($id)
    {
        if(!Auth::User()->address) {
            return view('new');
        }
        $user = Auth::User();
        $announcement = Announcement::find($id);
        return view('announcement', ['id' => $id, 'error' => "", 'announcement' => $announcement, 'user' => $user]);
    }


    public function showUser($id)
    {
        if(!Auth::User()->address) {
            return view('new');
        }

        $user = User::find($id);

        if($id != Auth::user()->id)
        {
            return view('announcement', ['error' => "Bruder, dass sind nicht deine Daten"]);
        }
        else
        return view('user', ['user' => $user]);
    }


// testroute für addresses grep via places api

    public function addresses() {
        return dd(1);
    }
}
