@extends('layouts.app')

@section('content')

        
<div class="py-4 px-4 md:px-12 lg:px-16 flex flex-col min-h-screen">

  @include('inc.nav')
  

  <div class="mt-6  mx-auto w-full flex jusitfy-between items-center">

  	<div class="flex jusitfy-center items-center">
  		<h3 class="text-lg lg:text-2xl font-semibold mr-2 border-r-2 border-white px-2 text-left">Users</h3>
  		<form class="" method="GET" action="{{ route('user.search') }}">
  			@csrf
  			<div class="relative flex">
  				<input  type="text" name="search" class=" block  lg:w-48 md:w-48 text-gray-700 rounded-full px-4 py-1 pr-10" value="{{ request()->input('search') }}">
				<button type="submit" class="absolute right-0 ">
					<svg  class="hover:text-gray-600 mr-1 h-8 w-8 text-gray-700 pr-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/></svg>
				</button>
  			</div>
  		</form>
  	</div>
  	<div class="ml-auto">
  		<span class="text-md font-semibold px-2 py-1 border-white border-2 rounded-lg">{{ $total }}</span>
  	</div>
  </div>

	<table class="mt-6 mx-auto w-full text-left">
		<thead>
			<th class="m-1 pb-4 pr-2 ">Avatar</th>
			<th class="m-1 pb-4">Name</th>
			<th class="m-1 pb-4 ">Email</th>
			<th class="m-1 pb-4 ">Created_at</th>
			<th class="m-1 pb-4 ">Action</th>
		</thead>

		<tbody class="">
			@forelse($users_search as $u)
				<tr class="cursor-pointer hover:bg-blue-400 rounded-full">
					<td>
						<img  class="m-1 h-12 w-12 rounded-full" src="/storage/{{$u->avatar}}">
					</td>
					<td><h4 class="m-1">{{ $u->name}}</h4></td>
					<td><h4 class="m-1">{{ $u->email}}</h4></td>
					<td><h4 class="m-1">{{ $u->created_at->diffForHumans()}}</h4></td>
					<td>
						<form method="POST" action="{{ route('user.profile.delete', $u->id ) }}">
							@csrf
							<button type="submit">
								<svg class="h-8 w-8 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
							</button>
						</form>
					</td>
				</tr>
			@empty
				<tr class="text-red-500 font-semibold text-md">
					<td>No Users registered.</td>
				</tr>
			@endforelse
		</tbody>
	</table>
	
</div>
	
@endsection
	