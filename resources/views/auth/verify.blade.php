@extends('layouts.app')

@section('content')
<div class="text-center w-screen mx-auto my-auto">
    

    <div class="mx-auto mb-4 lg:w-1/4 md:w-1/4 sm:w-2/4 w-3/4 pt-10">
        <div class="text-lg mt-8 font-black border-b-2 border-white">
            {{ __('Verify Your Email Address') }}
        </div>
        
    </div>

    <div class="align-center mx-auto mt-8 lg:w-1/4 md:w-1/4 sm:w-2/4 w-3/4">
        
            @if (session('resent'))
                <div class="mx-auto mb-4 lg:w-1/4 md:w-1/4 sm:w-2/4 w-3/4" role="alert">
                    {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
            @endif
            
            <p>{{ __('Before proceeding, please check your email for a verification link.') }}</p>
            <p>{{ __('If you did not receive the email') }},</p>

            <a class="font-bold " href="{{ route('verification.resend') }}">
                <button class="mt-6 rounded-full w-40 text-white bg-blue-700 px-2 py-2 hover:bg-blue-500">
                    {{ __('Click here') }}
                </button>
            </a>
            
    </div>
        
</div>

     
@endsection

                    

                    
         
