@extends('layouts.app')

@section('content')
<div class="flex flex-col justify-center min-h-screen">
    

    <div class="max-w-md mx-auto py-3 px-6 w-full">
        <div class="text-lg font-bold">
            {{ __('Reset Your Password') }}
        </div>
        
    </div>

    
    <div class="">

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <div class="max-w-md mx-auto py-3 px-6 w-full">

              <input type="hidden" name="token" value="{{ $token }}">

              <div class="block mb-3">
                <label class="ml-0 block text-white-700 text-md font-bold mb-2  font-bold   " for="emails">
                  {{ __('E-Mail Address') }}
                </label>
                <input class="@error('email') is-invalid @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="*******@gmail.com">
                @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                  @enderror
              </div>

              
              <div class="block mb-3">
                <label class="ml-0 block text-white-700 text-md font-bold mb-2  font-bold   " for="emails">
                  {{ __('Password') }}
                </label>
                <input class="@error('password') is-invalid @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus placeholder="**********">
                @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                  @enderror
              </div>

              <div class="block mb-3">
                <label class="ml-0 block text-white-700 text-md font-bold mb-2  font-bold   " for="password-confirm">
                  {{ __('Confirm Password') }}
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password-confirm" type="password" name="password_confirmation"  required autocomplete="new-password" autofocus placeholder="**********">

              </div>

              <div class="mt-3">
                  <button class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 mr-2 rounded">
                        {{ __('Reset Password  ') }}

                  </button>

              </div>

            </div>

        </form>
    </div>
        
</div>

     
@endsection

