<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meetup</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">

    <ul class="flex items-center">
        <li>
        <a href="/" class="p-3">Home</a>
        </li>

        <li>
        <a href="{{route('dashboard')}}" class="p-3">Dashboard</a>
        </li>
        
        <li>
        <a href="{{route('event')}}" class="p-3"> Make a event</a>
        </li>
<form method="get" action="{{route('event.search')}}">

<div class="flex justify-center">
    <!-- component -->
    <div class="w-full h-10 pl-5 pr-2 ml-5 mr-5 bg-white border rounded-full flex justify-between items-center relative">
        <input type="search" name="query" id="search" placeholder="Search" class="appearance-none w-full outline-none focus:outline-none active:outline-none" />
        
        <button type="submit" class="ml-1 outline-none focus:outline-none active:outline-none">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                viewBox="0 0 24 24" class="w-6 h-6">
            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
        </button>
    </div>
</div>
</form>

    </ul>


      <ul class="flex items-center">
      @auth
         <li>
        <a href="#" class="p-3">{{auth()->user()->name}}</a>
        </li>
        <li>
             <form action="{{route('logout')}}" method="post" class="p-3 inline">
             @csrf
                <button type="submit">Logout</button> 
            </form>
        
        </li>
      @endauth

        
      @guest
        <li>
        <a href="{{route('login')}}" class="p-3">Login</a>
        </li>

        <li>
        <a href="{{route('register')}}" class="p-3"> Register</a>
        </li>

      @endguest
          
    </ul>

    </nav>

  

    @yield('content')
</body>
</html>