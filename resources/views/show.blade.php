@extends('layouts.app')

@section('content')
            
<div class="flex flex-row">
	
	<div class="flex flex-row">
		<a href="{{ route('admin.home') }}">Back</a>
		<div>
			@if($user->avatar)
	        	<img class="h-16 w-16 rounded-full" src="{{ asset('storage/users/'. $user->avatar) }}">
	     	 @else

	       @endif
		</div>

		<div class="flex flex-col">
			<h1>{{ $user->name }}</h1>
			<span>{{ $user->email }}</span>
		</div>
	</div>





</div>    

@endsection
