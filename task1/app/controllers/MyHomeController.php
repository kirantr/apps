<?php

 class MyHomeController extends BaseController
 {

     public function home()
     {
         return View::make('home');
     }

     public function articles()
     {
         return View::make('articles', array('list' => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10)));
     }

     public function article($number = 1)
     {
         return View::make('article', ['number' => $number]);
     }

     public function about()
     {
         return View::make('about');
     }

     public function getContact()
     {
         return View::make('contact', ['error' => '0']);
     }

     public function postContact()
     {
         $name = Input::get('name');
         $message = Input::get('message');
         Input::flash();
         if ($name && $message)
         {
             return Redirect::to('thank')->withInput();
         } else
         {
             return View::make('contact', ['error' => '1']);
         }
     }

     public function Thank($name = 'unknown')
     {
         $name = Input::old('name');
         return View::make('thank', array('name' => $name));
     }

 }
 