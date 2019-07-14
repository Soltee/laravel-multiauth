@extends('layouts.app')

@section('content')

        
<div class="lg:w-3/4 mx-auto align-center text-gray-900 bg-gray-200">
    <div class="p-4 flex pt-10">
        <h1 class="text-3xl">
            Users
        </h1>
    </div>
    
    
    <div class="px-3 py-4 flex flex-col justify-center">

            {!! $usersChart->container() !!}           
        
    </div>
</div>
	
@endsection
