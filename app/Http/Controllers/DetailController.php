<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    public $servizi = [
        ['id' => 1 ,
         'lezione' => 'lezione di gruppo', 
         'descrizione' => 'Some quick example text to build on the card title and make up the bulk of the card Some quick example text to build on the    card title and make up the bulk of the card Some quick example text to build on the card title and make up the bulk of the card Some quick   example text to build on the card title and make up the bulk of the card' ,
        'prezzo' => 35],
        ['id' => 2 ,
         'lezione' => 'lezione singola',
         'descrizione' => 'Some quick example text to build on the card title and make up the bulk of the card Some quick example text to build on the 
          card title and make up the bulk of the card Some quick example text to build on the card title and make up the bulk of the card Some quick 
          example text to build on the card title and make up the bulk of the card' ,
         'prezzo' => 135], 
        ['id' => 3 , 
        'lezione' => 'scheda personalizzata', 
        'descrizione' => 'Some quick example text to build on the card title and make up the bulk of the card Some quick example text to build on the 
         card title and make up the bulk of the card Some quick example text to build on the card title and make up the bulk of the card Some quick 
         example text to build on the card title and make up the bulk of the card' ,
        'prezzo' => 40],  
    ];


    public function servizi(){
        return view('servizi', ['servizi'=>$this->servizi]);
    }


    public function show ($id){
        foreach ($this->servizi as $lesson){
            if ($id == $lesson['id']) {
                return view('show' , ['lesson' => $lesson]) ; 
            }
        }
    }
}
