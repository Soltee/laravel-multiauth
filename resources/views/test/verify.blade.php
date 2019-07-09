@extends('layouts.app')

@section('content')
<div class="container bg-black">
    
                <div class="card-header">{{ __('Verify Your Email Address Test') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, 
                    <a href="{{ route('test.verification.resend', $email) }}"
                    onclick="event.preventDefault();
                                     document.getElementById('resent-form').submit();"
                    >
                        {{ __('click here to request another') }}
                    </a>

                    <form id="resent-form" action="{{ route('test.verification.resend') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
