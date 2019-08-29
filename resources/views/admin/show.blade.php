@extends('layouts.app')

@section('content')

        
<div class="py-2 px-4 md:px-12 lg:px-16 flex flex-col min-h-screen">

  @include('inc.nav')
  
  <div class="flex flex-row max-w-xl mx-auto ">
  		
		<div class="w-64">

			<img  class="m-1 w-full h-full rounded-lg" src="/storage/users/{{ $user->avatar ? $user->avatar : 'default.jpg' }}">
		</div>

		<div class="pl-3 flex flex-col items-left">
			<h3 class="text-xl font-bold">{{ $user->name }}</h3>
			<h3 class="text-lg font-semibold mt-2">{{ $user->email }}</h3>
			<h3 class="mt-2">{{ $user->created_at->diffForHumans() }}</h3>
			<form class="mt-2" method="POST" action="{{ route('user.profile.delete', $user->id ) }}">
				@csrf
				<button type="submit">
					<svg class="h-8 w-8 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
				</button>
			</form>
		</div>

  </div>

  
</div>
	
@endsection
	