@extends('layouts.app')

@section('content')
<div class="w-screen text-center mx-auto my-auto">
    
    	
	    <div class="flex flex-col pt-40">
	    	<h1 class="text-elg ">
	    		Welcome to Laravel Multi Authentication System.
	    	</h1>
	<!--     	<h3 class="text-lg p-2">Click the Below Button Link!</h3>
	 -->    </div>
	    

	    <div class="flex-auto pt-10 pb-5">
	    	<a class="" href="{{ route('login') }}">
	    		<button class="bg-blue-1 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded-full">
				    {{ __('User Login') }}
				</button>
	        </a>
	        <a class="" href="{{ route('admin.login') }}">
	            <button class="sm:pt-6 font-bold py-2 px-4 rounded-full">
	            	{{ __('Admin Login') }}
				</button>
	        </a>
	    </div>

</div>
@endsection
