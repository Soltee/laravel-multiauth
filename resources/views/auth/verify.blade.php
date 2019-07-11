@extends('layouts.app')

@section('content')
<div class="w-screen mx-auto my-auto">
    

    <div class="flex justify-between mx-auto mb-4 lg:w-1/4 md:w-1/4 sm:w-2/4 w-3/4 pt-10">
        <div class="text-lg font-bold">
            {{ __('Verify Your Email Address') }}
        </div>
        
    </div>

    <div class=" mx-auto mt-6">
        
            @if (session('resent'))
                <div class="mx-auto mb-4 lg:w-1/4 md:w-1/4 sm:w-2/4 w-3/4" role="alert">
                    {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
            @endif
            
            {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
    </div>
        
</div>

     
@endsection

                    

                    
         
