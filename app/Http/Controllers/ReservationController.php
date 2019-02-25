<?php

namespace App\Http\Controllers;

use App\Reservation;

class ReservationController extends Controller
{
    public function form(){
        return view('reservation');
    }

    // Récupérer l'emplacement de l'utilisateur et sa position si checkbox now coché

    public function processing(){

       /* request()->validate([
            'arrival'=>['required'], // Vérifier que l'adresse existe
            if(!isset('now')){  
                'date'=>['required'], // Vérifier que la date et l'heure sont bien apres la date actuel
                'time'=>['required'],
            }
            if(!isset('nowPos')){
            'position'=>['required'], // Vérifier que l'adresse existe
            }

        ]);
        */
        

        return view('summary');
    }
}
