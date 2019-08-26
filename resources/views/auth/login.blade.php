@extends('layouts.app')

@section('content')
<div class="flex flex-col justify-center min-h-screen">
    

    <div class="max-w-md mx-auto py-3 px-6 w-full">
         <div class="text-lg lg:text-2xl font-bold">
            {{ __('User Login') }}
        </div>
        <p class="font-sm mt-3">
            New Here? 
            <a class="ml-2" href="{{ route('register') }}"> 
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 mr-2 rounded">

                    {{ __('Register User') }}

                </button>
            </a>

            
        </p>
         
    </div>

    <div class="">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="max-w-md mx-auto py-3 px-6 w-full">
                <div class="block mb-3">
                  <label class="ml-0 block text-white-700 text-md font-bold mb-2  font-bold   " for="emails">
                    {{ __('E-Mail Address') }}
                  </label>
                  <input class="@error('email') is-invalid @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="*******@gmail.com">
                 
                  @error('email')
                            <p class="mt-6 p-2 border-2 border-red-800 rounded" role="alert">
                                <strong>{{ $message }}</strong>
                            </p>
                    @enderror
                </div>

                
                <div class="block mb-3">
                  <lablock  bel class="ml-0 block text-white-700 text-md font-bold mb-2  font-bold   " for="emails">
                    {{ __('Password') }}
                  </label>
                  <input class="@error('password') is-invalid @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus placeholder="**********">
                   @error('password')
                            <p class="mt-6 p-2 border-2 border-red-800 rounded" role="alert">
                                <strong>{{ $message }}</strong>
                            </p>
                    @enderror
                </div>

                <div class="block   ">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>

                <div class="flex flex-col lg:flex-row justify-between mt-4">
                    <button class="w-full lg:w-auto bg-blue-500  mb-2 hover:bg-blue-700 text-white font-bold py-2 px-6 mr-2 rounded">
                          {{ __('Login') }}

                    </button>

                    @if (Route::has('password.request'))
                        <a class="w-full text-center lg:w-auto hover:underline py-2" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </div>

        </form>
    </div>
        
</div>

     
@endsection
