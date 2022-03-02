<?php
 namespace App\ViewComposers;

use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

 class ViewComposer
 {
     public $movieList = [];
     /**
      * Create a movie composer.
      *
      * @return void
      */
     public function __construct()
     {
         $this->movieList = [
             'Shawshank redemption',
             'Forrest Gump',
             'The Matrix',
             'Pirates of the Carribean',
             'Back to the future',
         ];
     }

     /**
      * Bind data to the view   .
      *
      * @param  View  $view
      * @return void
      */
     public function compose(View $view)
     {
        $cart = Session::get('carts');
        // dd($cart);
        $count = 0;
        if (isset($cart->items)) {
           $count = count($cart->items);
        }
        $view->with('count',$count);
        $view->with('latestMovie', end($this->movieList));
     }
 }