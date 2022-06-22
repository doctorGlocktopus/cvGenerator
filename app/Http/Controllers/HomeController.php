<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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
    public function index()
    {
        return view('anouncment', ['error' => ""]);
    }
    public function list()
    {
        ##$users = DB::table('users')->get();
        ##$users = Auth::all();
        $users = User::all();

        return view('overview', ['users' => $users]);
    }

    public function new()
    {
        ##$users = DB::table('users')->get();
        $users = Auth::User();

        return view('build', ['users' => $users]);
    }

    public function announcement($id)
    {
        return view('announcement', ['id' => $id, 'error' => ""]);
    }

    public function showUser($id)
    {
        $user = User::find($id);

        if($id != Auth::user()->id)
        {
            return view('announcement', ['error' => "Bruder, dass sind nicht deine Daten"]);
        }
        else
        return view('user', ['user' => $user]);
    }
}
