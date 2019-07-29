@extends('layouts.app')

@section('content')
<div class="w-screen mx-auto my-auto">
    

    <div class="flex justify-between mx-auto mb-4 lg:w-1/4 md:w-1/4 sm:w-2/4 w-3/4 pt-10">
        <div class="text-lg font-bold">
            {{ __('Admin Login') }}
        </div>
    </div>

    <div class="flex justify-between mx-auto mb-4 lg:w-1/4 md:w-1/4 sm:w-2/4 w-3/4 ">
        <p class="font-sm">
            New Here? 
            <a class="ml-2" href="{{ route('admin.register.view') }}"> 
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 mr-2 rounded">

                    {{ __('Register Admin') }}

                </button>
            </a>

            
        </p>
         
    </div>

    <div class=" mx-auto mt-6">
        <form method="POST" action="{{ route('admin.login') }}">
            @csrf

            <div class="mx-auto mb-4 lg:w-1/4 md:w-1/4 sm:w-2/4 w-3/4">
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

            
            <div class="mx-auto mb-4 lg:w-1/4 md:w-1/4 sm:w-2/4 w-3/4">
              <label class="ml-0 block text-white-700 text-md font-bold mb-2  font-bold   " for="emails">
                {{ __('Password') }}
              </label>
              <input class="@error('password') is-invalid @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus placeholder="**********">
              @error('password')
                    <p class="mt-6 p-2 border-2 border-red-800 rounded" role="alert">
                            <strong>{{ $message }}</strong>
                        </p>
                @enderror
            </div>

            <div class="mx-auto mb-4 lg:w-1/4 md:w-1/4 sm:w-2/4 w-3/4">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>

            <div class="flex justify-between mx-auto mb-4 lg:w-1/4 md:w-1/4 sm:w-2/4 w-3/4">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 mr-2 rounded">
                      {{ __('Login') }}

                </button>

                @if (Route::has('admin.password.request'))
                    <a class="hover:border-white hover:border-b-2 py-2" href="{{ route('admin.password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>

        </form>
    </div>
        
</div>
@endsection
