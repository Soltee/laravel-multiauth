<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class UsersController extends Controller
{

    public function search()
    {
        $query = request('search');

        $users_search = User::where('name', 'LIKE', '%'. $query.'%')->get(); 


        $users = User::latest()->paginate(10);
        $total = User::all()->count();
        $paginate = $users->count();

        return view('admin.home', compact('users', 'total', 'paginate', 'users_search'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
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
            $image->storeAs('/public/users', $original);

            $imagearray = ['avatar' => $original];
        }


        auth()->user()->update(array_merge([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ], $imagearray ?? []));

        return redirect()->route('profile')->with('success', 'Profile updated.');
    }

    public function show(User $user)
    {
        return view('show', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.home')->with('success', 'User removed.');
    }
}
