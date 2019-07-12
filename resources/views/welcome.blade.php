@extends('layouts.app')

@section('content')
<div class="w-screen text-center mx-auto">
    
    	
	    <div class="flex flex-col pt-40">
	    	<h1 class="text-elg ">
	    		Welcome to Laravel Multi Authentication System.
	    	</h1>
	   </div>
	    

	    <div class="flex-auto pt-10 pb-5 ">
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

</div>
@endsection
