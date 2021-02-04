@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-8/12 bg-white p-6 rounded-lg">
        @foreach($registerEvent as $registerEvent)
        
         <div>
        {{$registerEvent->title}}
        </div>
       

         <div>
        {{$registerEvent->description}}
        </div>


         <div>
        {{$registerEvent->start}}
        </div>

        @endforeach
    </div>
</div>
@endsection