<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Auth\Events\Verified;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = 'admin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }

    /*
        * Send Email For Verifying
    */
    // public function show(Request $request)
    // {   
    //     return ($request->user()->hasVerifiedEmail()) 
    //             ? (redirect('admin/home')->with('success', 'Welcome'))
                                            
    //             : view('admin.verify');
    // }

    // public function verify(Request $request)
    // {
    //     if ($request->route('id') != $request->user()->getKey()) {
    //         throw new AuthorizationException;
    //     }

    //     if ($request->user()->hasVerifiedEmail()) {
    //         return redirect($this->redirectPath());
    //     }

    //     if ($request->user()->markEmailAsVerified()) {
    //         event(new Verified($request->user()));
    //     }

    //     return redirect($this->redirectPath())->with('verified', true);
    // }

    /**
     * Resend the email verification notification.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function resend(Request $request)
    // {
    //     if ($request->user()->hasVerifiedEmail()) {
    //         return redirect($this->redirectPath());
    //     }

    //     $request->user()->sendEmailVerificationNotification();

    //     return back()->with('resent', true);
    // }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('admin');
    }

    


}
