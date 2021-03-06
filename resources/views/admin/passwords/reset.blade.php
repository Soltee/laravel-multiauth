@extends('layouts.app')

@section('content')
<div class="w-screen mx-auto my-auto">
    

    <div class="flex justify-between mx-auto mb-4 lg:w-1/4 md:w-1/4 sm:w-2/4 w-3/4 pt-10">
        <div class="text-lg font-bold">
            {{ __('Admin Reset Your Password') }}
        </div>
        
    </div>

    
    <div class=" mx-auto mt-6">

        <form method="POST" action="{{ route('admin.password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="mx-auto mb-4 lg:w-1/4 md:w-1/4 sm:w-2/4 w-3/4">
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

            
            <div class="mx-auto mb-4 lg:w-1/4 md:w-1/4 sm:w-2/4 w-3/4">
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

            <div class="mx-auto mb-6 lg:w-1/4 md:w-1/4 sm:w-2/4 w-3/4">
              <label class="ml-0 block text-white-700 text-md font-bold mb-2  font-bold   " for="password-confirm">
                {{ __('Confirm Password') }}
              </label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password-confirm" type="password" name="password_confirmation"  required autocomplete="new-password" autofocus placeholder="**********">

            </div>

            <div class="flex justify-between mx-auto mb-4 lg:w-1/4 md:w-1/4 sm:w-2/4 w-3/4">
                <button class="bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-6 mr-2 rounded">
                      {{ __('Reset Password ') }}

                </button>

            </div>

        </form>
    </div>
        
</div>

     
@endsection

