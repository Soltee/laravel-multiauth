@extends('layouts.app')

@section('content')
<div class="flex flex-col justify-center min-h-screen">
    

    <div class="max-w-md mx-auto py-3 px-6 w-full">
        <div class=" text-2xl font-bold">
            {{ __('Reset Password') }}
        </div>
    </div>

    <div class="">

        <form method="POST" action="{{ route('password.email') }}">
             @csrf

              <div class="max-w-md mx-auto py-3 px-6 w-full">
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

              
               <div class="flex flex-col lg:flex-row justify-between mt-4">
                    <button class="w-full lg:w-auto bg-blue-500  mb-2 hover:bg-blue-700 border-transparent text-white font-bold py-2 px-6 mr-2 rounded">
                          {{ __('Send Link') }}

                    </button>

                    <a class="" href="{{ route('login') }}">
                        <button class="w-full text-center lg:w-auto hover:underline py-2">                    
                            {{ __('Not Now ?') }}
                        </button>
                    </a>
                    
                </div>

            </div>

        </form>
    </div>
        
</div>
@endsection
