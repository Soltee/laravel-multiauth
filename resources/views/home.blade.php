@extends('layouts.app')

@section('content')
<div class="py-2 px-4   md:px-12 lg:px-16 flex flex-col min-h-screen flex flex-col items-center justify-center">
    
        <div class="flex flex-col items-center justify-center ">
            <h1 class="text-xl font-bold">
                Welcome to Dashboard
            </h1>
            <a href="{{ route('profile') }}" class="inline-flex font-bold rounded-full items-start px-4 py-2 bg-green-600 hover:bg-green-500 mt-4">
				<svg class="h-6 w-6 text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h274.9c-2.4-6.8-3.4-14-2.6-21.3l6.8-60.9 1.2-11.1 7.9-7.9 77.3-77.3c-24.5-27.7-60-45.5-99.9-45.5zm45.3 145.3l-6.8 61c-1.1 10.2 7.5 18.8 17.6 17.6l60.9-6.8 137.9-137.9-71.7-71.7-137.9 137.8zM633 268.9L595.1 231c-9.3-9.3-24.5-9.3-33.8 0l-37.8 37.8-4.1 4.1 71.8 71.7 41.8-41.8c9.3-9.4 9.3-24.5 0-33.9z"/></svg>
				<span class="ml-1 text-white">Edit Profile</span>
			</a> 
       </div>
        

</div>
@endsection
