@extends('layouts.app')

@section('content')
<div class="flex flex-col justify-center min-h-screen">
    

    <div class="max-w-md mx-auto py-3 px-6 w-full">
        <div class="text-lg mt-8 font-black border-b-2 border-white">
            {{ __('Verify Your Email Address') }}
        </div>
        
    </div>

    <div class="max-w-md mx-auto py-3 px-6 w-full">
        
            @if (session('resent'))
                <div class="px-2" role="alert">
                    {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
            @endif
            
            <p>{{ __('Before proceeding, please check your email for a verification link.') }}</p>
            <p>{{ __('If you did not receive the email') }},</p>

            <a class="font-bold " href="{{ route('verification.resend') }}">
                <button class="w-full  lg:ml-2 lg:w-auto bg-blue-500  mb-2 hover:bg-blue-700 text-white font-bold py-2 px-6 mr-2 rounded">
                    {{ __('Click here') }}
                </button>
            </a>
            
    </div>
        
</div>

     
@endsection

                    

                    
         
