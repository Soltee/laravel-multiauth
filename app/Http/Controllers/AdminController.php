<?php

namespace App\Http\Controllers;

use App\User;
use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        $this->middleware('verified');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::latest()->paginate(10);
        $total = User::all()->count();
        $paginate = $users->count();
        $users_search = '';

        return view('admin.home', compact('users', 'total', 'paginate', 'users_search'));
    }

    /**
     * Show the profile update view
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show()
    {
        $auth = auth('admin')->user();

        return view('admin.profile', compact('auth'));
    }


    /**
     * update admin profile
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function update(Request $request, Admin $admin)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if($request->hasFile('avatar'))
        {
            $image = $request->file('avatar');
            $basename = Str::random();
            $original = $basename . '.' . $image->getClientOriginalExtension();
            $image->storeAs('/public/admins', $original);

            $imagearray = ['avatar' => $original];
        }


        auth()->user()->update(array_merge([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ], $imagearray ?? []));

        return redirect()->route('admin.profile')->with('success', 'Profile updated.');
    }
}
