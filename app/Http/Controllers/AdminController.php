<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Charts\UserChart;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
        // $this->middleware('administrator');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::latest()->paginate(10);

        $usersChart = new UserChart();
        $usersChart->labels(['Users']);
        $usersChart->dataset('Customer', 'line', [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 ]);

        return view('admin.home', compact('usersChart'));
    }
}
