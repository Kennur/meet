@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    
        <!-- component -->
<!--
  UI Design Prototype
  Link : https://dribbble.com/shots/10452538-React-UI-Components
-->

  <div class="relative py-3 sm:max-w-xl sm:mx-auto">
  <form action="{{route('event')}}" method="post">
  @csrf
    <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
      <div class="max-w-md mx-auto">
        <div class="flex items-center space-x-5">
          <div class="h-14 w-14 bg-yellow-200 rounded-full flex flex-shrink-0 justify-center items-center text-yellow-500 text-2xl font-mono">i</div>
          <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
            <h2 class="leading-relaxed">Create an Event</h2>
            <p class="text-sm text-gray-500 font-normal leading-relaxed">Host a event to get friends and associates</p>
          </div>
        </div>
        <div class="divide-y divide-gray-200">
          <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
            <div class="flex flex-col">
              <label class="leading-loose">Event Title</label>
              <input type="text" name="title" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600 @error('title') border-red-500 @enderror" placeholder="Event title">
                @error('title')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
            </div>
            </div>

            <div class="flex flex-col">
              <label class="leading-loose">Event Description</label>
               <textarea name="description" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600 @error('description') border-red-500 @enderror" placeholder="description"></textarea>
               @error('description')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
            </div>
           
            <div class="flex items-center space-x-4">
              <div class="flex flex-col">
                <label class="leading-loose">Start</label>
                <div class="relative focus-within:text-gray-600 text-gray-400">
                  <input type="date" name="start" class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600 @error('start') border-red-500 @enderror">
                   @error('start')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
                  <div class="absolute left-3 top-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                  </div>
                </div>
              </div>
              <div class="flex flex-col">
                <label class="leading-loose">End</label>
                <div class="relative focus-within:text-gray-600 text-gray-400">
                  <input type="date" name="end" class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600 @error('end') border-red-500 @enderror">
                   @error('end')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
                  <div class="absolute left-3 top-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          <div class="pt-4 flex items-center space-x-4">
               
              <button class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Create</button>
              
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
</div>
@endsection