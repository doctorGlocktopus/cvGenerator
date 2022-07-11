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


    public function list()
    {
        if(!Auth::User()->address) {
            return view('new');
        } else {
            return view('user');
        }
    }
}
