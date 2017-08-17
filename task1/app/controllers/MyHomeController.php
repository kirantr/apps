<?php
class MyHomeController extends BaseController {
    
     public function home(){
         return View::make('home');
     }
    public function articles()
    {
        return View::make('articles', array('list'=>array(1,2,3,4,5,6,7,8,9,10)));
    }
    public function article($num=1)
    {
        return View::make('article', ['num' => $num]);
    }

     public function about()
    {
        return View::make('about');
    }


}
