<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Report;
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

        $open = Report::where('status', 1)
                    ->where('userId', Auth::User()->id)->get();
        $closed= Report::where('status', 0)
                    ->where('userId', Auth::User()->id)
                    ->get();
       // $probTypes= DB::table('OSCP')->get();
        return view('home', compact('open', 'closed'));
    }
}
