@extends('layouts.app')

@section('content')

        
<div class="py-4 px-4 md:px-12 lg:px-16 flex flex-col min-h-screen">

  @include('inc.nav')
  <!-- <div class="flex flex-col align-center px-4">
    
    <div class="flex flex-row justify-between items-center">
      <div class="flex flex-row">
        <h1 class="text-lg lg:text-3xl  ml-2 text-gray-600 font-medium">
          Users
        </h1>
        <Search></Search>
      </div>
      <div class="mr-2 text-lg text-gray-600 font-semibold">
        <span class="">{{ $paginate }} out of {{ $total }}</span>
      </div>
    </div>

        <table class="mt-4 mb-4 p-3 w-full">
          <thead>
            <tr>
              <th>Avatar</th>
              <th>Name</th>
              <th>Email</th>
              <th>Created At</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @forelse($users as $user)
              <user :user="{{ $user }}" :page="{{ $users->currentPage() }}"></user>
            @empty
              <p class="p-2 text-red-900">No users registered.</p>
            @endforelse
            
    
          </tbody>
          
        </table>

        <div class="text-center">
          {{ $users->links() }}
        </div>

  </div> -->

  

</div>
	
@endsection
