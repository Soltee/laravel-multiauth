@extends('layouts.app')

@section('content')
<div class=" px-4  pt-16  md:px-12 lg:px-16 flex flex-col min-h-screen flex flex-col items-center justify-center">
    <div class="mt-3 w-full z-0  border-white">
        <ul class="m-0 p-0 flex flex-row">
          <li class="">
            <a class="mr-4 inline-flex px-2 py-2  font-bold border-b-2  border-transparent hover:border-white {{ Route::currentRouteName() == 'home' ? 'border-white' : '' }}" href="{{ route('home') }}">
              <svg class="h-6 w-6 text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z"/></svg>
              <span class="ml-1 text-white">Home</span>
            </a>
          </li>
        </ul>
    </div>
	<form method="POST" action="{{ route('profile.update', $auth->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-col mb-6">
                 <div class="flex flex-row justify-between items-baseline">
                    <h3 class="text-white font-semibold text-lg">Update Profile</h3>
                    <button class="bg-green-600 hover:bg-green-500 text-white font-bold py-2 px-6 rounded-full">
		                  Save
		            </button>
                </div>
            </div>
            <div class="flex flex-col">
                
                <div class="max-w-md mb-6 flex flex-col">
                    
                    <div class="flex justify-between items-baseline border rounded border-gray-400">
                      <input id="avatar" type="file" class="shadow appearance-none  w-full py-2 px-3 text-gray-700 leading-tight focus:shadow-outline focus:shadow-outline" name="avatar" value="{{ old('avatar') }}" required autocomplete="avatar" placeholder="" autofocus>
                      <label for="avatar" class="block mr-2 text-white-700 text-md mb-3 font-semibold">{{ __('Avatar') }}</label>
                    </div>
                    @if($auth->avatar)
                      <img class="h-40 w-full object-cover object-top" src="{{$auth->avatar }}">
                    @endif

                    @error('avatar')
                        <p style="color:red;" class="mt-2 px-1 py-1  border-2 rounded" role="alert">
                            <strong>{{ $message }}</strong>
                        </p>
                    @enderror
                </div>

                

                <div class="max-w-md mb-6">
                    <label for="name" class="block text-white-700 text-md mb-3 font-semibold">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="fshadow appearance-none border rounded border-gray-400 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" value="{{ old('name') ?? $auth->name }}" required autocomplete="name" placeholder="" autofocus>

                        @error('name')
                            <p style="color:red;" class="mt-2 px-1 py-1  border-2 rounded" role="alert">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror
                    </div>
                </div>

                <div class="max-w-md mb-6">
                    <label for="email" class="block text-white-700 text-md mb-3 font-semibold">{{ __('Email') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="fshadow appearance-none border rounded border-gray-400 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" value="{{ old('email') ?? $auth->email }}" required autocomplete="email"  autofocus>

                        @error('email')
                            <p style="color:red;" class="mt-2 px-1 py-1  border-2 rounded" role="alert">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror
                    </div>
                </div>


                <div class="max-w-md mb-6">
                    <label for="password" class="block text-white-700 text-md mb-3 font-semibold">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="fshadow appearance-none border rounded border-gray-400 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="password" value="{{ old('password') }}" placeholder="*********" required autocomplete="password"  autofocus>

                        @error('password')
                            <p style="color:red;" class="mt-2 px-1 py-1  border-2 rounded" role="alert">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror
                    </div>
                </div>

                 <div class="max-w-md mb-6">
                    <label for="confirm" class="block text-white-700 text-md mb-3 font-semibold">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="confirm" type="password" class="fshadow appearance-none border rounded border-gray-400 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="password_confirmation" value="{{ old('confirm') }}" required autocomplete="confirm" placeholder="********" autofocus>

                        @error('confirm')
                            <p style="color:red;" class="mt-2 px-1 py-1  border-2 rounded" role="alert">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror
                    </div>
                </div>
            </div>

        </form>

</div>
@endsection
