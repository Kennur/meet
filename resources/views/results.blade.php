@extends('layouts.app')

@section('content')

@if($events->count())
@foreach($events as $event)

<!-- component -->
<div class="max-w-4xl px-10 my-4 ml-5 mr-5 py-6 bg-white rounded-lg shadow-md">
        <div class="flex justify-between items-center">
            <span class="font-light text-gray-600">{{$event->created_at}}</span>
            
        </div>
        <div class="mt-2">
            <a class="text-2xl text-gray-700 font-bold hover:text-gray-600" href="#">{{$event->title}}</a>
            <p class="mt-2 text-gray-600">{{$event->description}}!</p>
        </div>
        <div class="mt-5">
            <p>Start date: {{$event->start}}</p>
            <p>End date: {{$event->end}}</p>
            <p>Host: {{$event->user->name}}</p>
        </div>
        <form action="{{route('event.join',$event)}}" method="post">
        @csrf
         <div>
            <button type="submit" class="bg-blue-500 text-white mt-4 px-4 py-2 rounded font-medium">Join</button>
        </div>
        </form>
    </div>

@endforeach
@else
<p>Sorry,nothing is found.</p>
@endif

@endsection