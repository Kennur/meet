<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
     public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        return view('event');
    }

    public function store(Request $request)
    {
        //dd($request->title);

        // validate if not empty field is
        // todo date has to be correct
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'start'=>'required',
            'end'=>'required'
        ]);

        // create a post thru eloquent relationship hasMany defined in User model by posts method
        $request->user()->events()->create($request->all());

        // relaods page with new added post
        return redirect('dashboard');
    }


     public function search(Request $request)
    {
        $request->validate([
            'query'=>'required'
        ]);

        $query=$request->input('query');
        $events=Event::where('title','like',"%$query%")->orWhere('description','like',"%$query%")->paginate(6);
        //dd($events);
   
       return view('results',compact('events'));
    }

   
    
}
