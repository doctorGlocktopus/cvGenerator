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
        return view('anouncment');
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
}
