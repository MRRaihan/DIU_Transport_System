<?php

namespace App\Http\Controllers;

use App\Route;
use Illuminate\Http\Request;

class TicketController extends Controller
{
   public function ticket(){
       $data['routes']=Route::where('status', 'active')->orderBy('id', 'asc')->get();
       return view('frontend.online_ticket', $data);
   }

    public function availablebus(){
        return view('frontend.available_bus');
    }

    public function buslocation(){

        return view('frontend.bus_location');

    }
}
