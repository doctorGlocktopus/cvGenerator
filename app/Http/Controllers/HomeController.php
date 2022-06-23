<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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

    public function list()
    {
        ##$users = DB::table('users')->get();
        ##$users = Auth::all();
        $users = User::all();

        return view('overview', ['users' => $users]);
    }

    public function new()
    {
        return view('new');
    }

    public function announcement($id)
    {
        $user = Auth::User();
        $announcement = Announcement::find($id);
        return view('announcement', ['id' => $id, 'error' => "", 'announcement' => $announcement, 'user' => $user]);
    }

    public function overviewAnnouncement($id)
    {
        // $announcements = Announcement::where('user_id', $id);
        $announcements = Announcement::where('user_id', $id)->get();
        return view('overviewAnnouncement', ['announcements' => $announcements]);
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
