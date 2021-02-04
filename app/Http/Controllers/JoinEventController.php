<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class JoinEventController extends Controller
{
     public function join(Request $request,Event $event) 
    {
        //dd($event);
        


        
        $event->registeredEvents()->create([
            'user_id'=>$request->user()->id
        ]);

        return redirect ('dashboard');
    }
}
