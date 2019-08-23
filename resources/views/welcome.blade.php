@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto mt-4">
    
    	
	    <div class="">
	    	<h1 class="text-elg ">
	    		Welcome to Laravel Multi Authentication System.
	    	</h1>
	   </div>
	    

	   	@auth()
			<div class="flex-auto mt-4 pb-5 ">
	   			<a href="{{ route('home') }}" class="inline-flex font-bold rounded-full items-start hover:bg-blue-400 px-4 py-2  mt-4">
				    <svg class="h-6 w-6 text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z"/></svg>
					<span class="ml-1 text-white">Home</span>
				</a>
	   			<a href="{{ route('profile') }}" class="ml-2 inline-flex font-bold rounded-full items-start px-4 py-2 bg-blue-500 hover:bg-blue-400 mt-4">
				<svg class="h-6 w-6 text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h274.9c-2.4-6.8-3.4-14-2.6-21.3l6.8-60.9 1.2-11.1 7.9-7.9 77.3-77.3c-24.5-27.7-60-45.5-99.9-45.5zm45.3 145.3l-6.8 61c-1.1 10.2 7.5 18.8 17.6 17.6l60.9-6.8 137.9-137.9-71.7-71.7-137.9 137.8zM633 268.9L595.1 231c-9.3-9.3-24.5-9.3-33.8 0l-37.8 37.8-4.1 4.1 71.8 71.7 41.8-41.8c9.3-9.4 9.3-24.5 0-33.9z"/></svg>
					<span class="ml-1 text-white">Edit Profile</span>
				</a>
	   		</div>
	   	@else
	    <div class="mx-auto flex-auto pt-10 pb-5 ">
	    	<a class="pr-6" href="{{ route('login') }}">
	    		<button class="bg-blue-1 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded-full">
				    {{ __('User Login') }}
				</button>
	        </a>
	        <a class="" href="{{ route('admin.login') }}">
	            <button class=" font-bold py-2 px-4 border-b-2 border-transparent hover:border-white ">
	            	{{ __('Admin Login') }}
				</button>
	        </a>
	    </div>
	    @endauth

</div>
@endsection
