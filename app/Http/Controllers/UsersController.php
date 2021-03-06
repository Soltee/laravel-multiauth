<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use JD\Cloudder\Facades\Cloudder;

class UsersController extends Controller
{

    public function search()
    {
        $query = request('search');

        $users_search = User::where('name', 'LIKE', ''. $query . '%')->get(); 
        $total = $users_search->count();
        return view('admin.search', compact('users_search', 'total'));
        
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
            Cloudder::upload($request->file('avatar'), null,  
            [
                "folder" => "multiauth/users/"
            ],  []);

            $c = Cloudder::getResult();
            $imagearray = ['avatar' => $c['url']];
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
        return view('admin.show', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {

        $this->remove($user);
        if(request('url') == 'home'){
            return redirect()->back()->with('success', 'User removed from the database;');
        } else {
            return redirect()->route('admin.home')->with('success', 'User removed from the database;');
        }
    }

    protected function remove($user)
    {
        if($user->avatar)
        {
            File::delete('http://localhost:8000/storage/{$user->avatar}');
        }
        $user->delete();
    }

}
