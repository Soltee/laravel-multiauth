@extends('layouts.app')

@section('content')
<div class="w-screen mx-auto my-auto">
    

    <div class="flex justify-between mx-auto mb-4 lg:w-1/4 md:w-1/4 sm:w-2/4 w-3/4 pt-10">
         <div class="text-lg font-bold">
            {{ __(' Register') }}
        </div>
    </div>

    <div class=" mx-auto mt-6">
        <form method="POST" action="{{ route('register') }}">
            @csrf
                        

            <div class="mx-auto mb-4 lg:w-1/4 md:w-1/4 sm:w-2/4 w-3/4">
              <label class="ml-0 block text-white-700 text-md font-bold mb-2  font-bold   " for="name">
                {{ __('Name') }}
              </label>
              <input class="@error('name') is-invalid @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="*******">
              @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>         

            <div class="mx-auto mb-4 lg:w-1/4 md:w-1/4 sm:w-2/4 w-3/4">
              <label class="ml-0 block text-white-700 text-md font-bold mb-2  font-bold   " for="email">
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

            <div class="flex justify-between mx-auto my-4 mb-4 lg:w-1/4 md:w-1/4 sm:w-2/4 w-3/4">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-0 px-6 mr-2 rounded">
                      {{ __('Register') }}

                </button>

                <a class="" href="{{ route('welcome') }}">
                    <button class="bg-transparent hover:bg-white-500 text-white-700 font-semibold hover:text-white py-2 px-4 border border-white-500 hover:border-blue-600 rounded">                    {{ __('Go Back') }}
                    </button>
                </a>
                
            </div>

        </form>
    </div>
        
</div>
@endsection


                        

                        

