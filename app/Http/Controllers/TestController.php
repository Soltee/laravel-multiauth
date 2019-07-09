<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
use Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Notifications\TestVerifyEmail;

class TestController extends Controller
{
    /*
		* Register
    */
	public function register(Request $request)
	{
		$this->validator($request->all())->validate();

        $test = $this->create($request->all());

        $this->guard()->login($test);


        return redirect('test/verify/{$test->email}');
	}

	/**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $test = Test::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'token'  => str_random(60),
        ]);

        $test->notify(new TestVerifyEmail($test));

        return $test;

    }

    public function showRegisterationForm()
    {
        return view('test.register');
    }

    public function showVerify($email)
    {
        return view('test.verify', compact('email'));
    
    }


    public function getVerify($email, $token)
    {

    	$found = Test::where(['email' => $email, 'token' => $token])->first();
    	if($found)
    	{
    		$found->update([
    			'token' => 'verified'
    		]);

    		return redirect()->route('test.home')->with('status', 'Verified!');
    	}
    }

    public function home()
    {
    	return view('test.home');
   	}



	protected function guard()
	{
		return Auth::guard('test');
	}
}
