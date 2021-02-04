<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\RegisterEvent;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(Request $request,RegisterEvent $registerEvent)
    {
        $user = auth()->user();
        $id=$user->id;
        //dd($id);
        
         //$registerEvent=RegisterEvent::where('user_id', '=', $id)->get();

         $registerEvent=Event::with(['registeredEvents'])->where('user_id', '=', $id)->get();
        //dd($registerEvent);
     
        return view('dashboard',[
            'registerEvent'=>$registerEvent,
          
        ]);
    }
}
