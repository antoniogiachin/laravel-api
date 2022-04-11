<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
// per usare facade Auth
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        //prelevo tutti i dati inseriti dall'utente
        $user = Auth::user();

        //se volessi solo Id con funzione Auth
        //$id = Auth::id();

        // se volessi verificare connessione o meno utente
        // if(Auth::check()){
        //     echo 'Utente loggato';
        // } else {
        //     echo ' Utente non loggato';
        // }
        
        // carbon date
        $endOfMonth = Carbon::now()->endOfMonth()->endOfDay();
        $now = Carbon::now();
        $dayToMonthEnds = $endOfMonth->diffInDays($now);
        //ritorno la vista con i dati inseriti in compact
        return view('admin.home', compact('user', 'dayToMonthEnds'));

    }
}
