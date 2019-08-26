@extends('layouts.app')

@section('content')
<div class="flex flex-col justify-center min-h-screen">
    

    <div class="mt-6 max-w-md mx-auto py-3 px-6 w-full">
         <div class="text-lg lg:text-2xl font-bold">
            {{ __(' Register Your Account') }}
        </div>
    </div>

    <div class="">
        <form method="POST" action="{{ route('register') }}">
            @csrf
                        
            <div class="max-w-md mx-auto py-3 px-6 w-full">
              
              <div class="block mb-3">
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

              <div class="block mb-3">
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

              <div class="flex flex-col-reverse lg:flex-row justify-end mt-4">
                  

                  <a class="" href="{{ route('welcome') }}">
                      <button class="w-full lg:w-auto rounded bg-indigo-800 text-center lg:w-auto hover:bg-indigo-700 py-2 px-6">                    
                        {{ __('Go Back') }}
                      </button>
                  </a>

                  <button class="w-full  lg:ml-2 lg:w-auto bg-blue-500  mb-2 hover:bg-blue-700 text-white font-bold py-2 px-6 mr-2 rounded">
                        {{ __('Register') }}

                  </button>
                  
              </div>
            </div>

        </form>
    </div>
        
</div>
@endsection


                        

                        

