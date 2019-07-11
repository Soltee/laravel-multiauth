@extends('layouts.app')

@section('content')
<div class="w-screen mx-auto my-auto">
    

    <div class="flex justify-between mx-auto mb-4 lg:w-1/4 md:w-1/4 sm:w-2/4 w-3/4 pt-10">
        <div class="text-lg font-bold">
            {{ __('Reset Password') }}
        </div>
    </div>

    <div class=" mx-auto mt-6">

        <form method="POST" action="{{ route('password.email') }}">
             @csrf

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

            
           <div class="flex justify-between mx-auto my-4 mt-4 mb-4 lg:w-1/4 md:w-1/4 sm:w-2/4 w-3/4">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-0 px-6 mr-2 rounded">
                      {{ __('Send Link') }}

                </button>

                <a class="" href="{{ route('login') }}">
                    <button class="bg-transparent  text-white-700 font-semibold hover:text-white py-2 px-4 border border-white-500 hover:border-white-600 rounded">                    
                        {{ __('Not Now ?') }}
                    </button>
                </a>
                
            </div>


        </form>
    </div>
        
</div>
@endsection
