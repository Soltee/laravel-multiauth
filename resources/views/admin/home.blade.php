@extends('layouts.app')

@section('content')

        
<div class="lg:px-12 flex flex-row align-center text-gray-900 bg-gray-200">

  <div class="w-3/4 flex flex-col align-center px-4">
    
    <div class="flex flex-row justify-between items-center">
      <h1 class="text-3xl  ml-2 text-gray-600 font-medium">
        Users
      </h1>
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
              <tr class="border-2 border-gray-400 rounded">
                <td>
                  @if($user->avatar)
                    <img class="h-16 w-16 rounded-full" src="{{ asset('storage/users/'. $user->avatar) }}">
                  @else

                  @endif
                </td>
                <td class="text-gray-600 p-2">
                  <a href="{{ route('user.show', $user->id) }}">
                  {{ $user->name }}
                  </a></td>
                <td class="text-gray-600 p-2">{{ $user->email }}</td>
                <td class="text-gray-600 p-2">{{ $user->created_at->diffForHumans() }}</td>
                <td text-gray-600 p-2></td>
                <td class=""> 

                  <form  action="{{ route('user.profile.delete', $user->id) }}" method="POST">
                      @csrf
                      @method('DELETE')

                      <button type="submit" class="bg-red-500 p-2 rounded-lg hover:text-indigo-100 flex flex-row items-center">
                        <svg class="w-6 h-6 text-white hover:text-indigo-100" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M32 464a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128H32zm272-256a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zM432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16z"/></svg>
                        <span class="ml-2 text-white font-bold text-md">{{ __('Drop') }}</span>
                      </button>
                  </form>

                </td>
              </tr>
            @empty
              <p class="p-2 text-red-900">No users registered.</p>
            @endforelse
            
    
          </tbody>
          
        </table>

        <div class="text-center">
          {{ $users->links() }}
        </div>

  </div>

  <div class="w-1/4 flex flex-col ">
      <form  action="{{ route('user.search') }}" method="GET">
          @csrf
          <div class="flex flex-row items-center">
            <input type="text" class="bg-blue-500  w-full text-white rounded-l-full px-4 py-2 -pr-2" name="search" value="{{ request()->input('search') }}">
            
            <button type="submit" class="py-1 px-2 bg-blue-500 rounded-r-full hover:text-indigo-100">
              <svg class="hover:text-gray-400 h-8 w-8 text-white pr-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/></svg>
            </button>
          </div>
      </form>

      @if($users_search)
        
        <span class="ml-auto text-blue-500">{{ $users_search->count() }}</span>
        @forelse($users_search as $user)
            <a href="{{ route('user.show', $user->id) }}" class="flex flex-row items-top">
              @if($user->avatar)
                <img class="h-16 w-16 rounded-full" src="{{ asset('storage/users/'. $user->avatar) }}">
              @else

              @endif
              <span class="text-gray-600 p-2 text-bold">{{ $user->name }}</span>
            </a>
                
        @empty
          <div>
            No users match.
          </div>
        @endforelse
      @endif
  </div>

</div>
	
@endsection
