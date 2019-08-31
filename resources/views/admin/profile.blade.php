@extends('layouts.app')

@section('content')

<div class="py-2 px-4 md:px-12 lg:px-16 flex flex-col min-h-screen">
    @include('inc.nav')

    <form method="POST" action="{{ route('admin.profile.update', $auth->id) }}" enctype="multipart/form-data">
        @csrf
        <div class="md:max-w-lg  mt-3 md:mt-2 lg:mt-0 mx-auto py-3 px-2 md:px-6 w-full">
            <div class="flex flex-col mb-6">
                 <div class="flex flex-row justify-between items-baseline">
                    <h3 class="text-white font-semibold text-lg">Update Admin Profile</h3>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-full">
                      Save
                </button>
                </div>
            </div>
            <div class="flex flex-col">
                
                <div class="w-full">
                    
                    <div class="flex justify-between items-baseline border rounded border-gray-400">
                        <input id="avatar" type="file" class="shadow appearance-none  w-full py-2 px-3 text-gray-700 leading-tight focus:shadow-outline focus:shadow-outline" name="avatar" value="{{ old('avatar') }}" required autocomplete="avatar" placeholder="" autofocus>
                      <label for="avatar" class="block mr-2 text-white-700 text-md mb-3 font-semibold">{{ __('Avatar') }}</label>
                    </div>
                    @if($auth->avatar)
                        <img class="h-40 w-full object-cover object-top" src="{{ asset('storage/admins/'. $auth->avatar) }}">
                    @endif

                    @error('avatar')
                        <p style="color:red;" class="mt-2 px-1 py-1  border-2 rounded" role="alert">
                            <strong>{{ $message }}</strong>
                        </p>
                    @enderror
                </div>

                

                <div class="block mb-3">
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

                <div class="block mb-3">
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


                <div class="block mb-3">
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

                <div class="block mb-3">
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

        </div>
    </form>

</div>
@endsection
