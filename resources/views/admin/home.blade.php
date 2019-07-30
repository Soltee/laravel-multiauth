@extends('layouts.app')

@section('content')

        
<div class="max-w-lg mx-auto flex flex-col align-center text-gray-900 bg-gray-200">

        <h1 class="text-3xl mx-auto text-gray-600 font-medium">
            Users
        </h1>

        <table class="mx-auto mt-4 mb-4 p-3">
          <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @forelse($users as $user)
            	<tr class="border-2 border-gray-400 rounded">
	              <td class="text-gray-600 p-2">{{ $user->name }}</td>
	              <td class="text-gray-600 p-2">{{ $user->email }}</td>
	              <td class="text-gray-600 p-2">{{ date($user->created_at) }}</td>

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
	
@endsection
