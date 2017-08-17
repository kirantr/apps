<?php
use TinyURL\Repositotry\LinkRepository;
class IndexController extends BaseController
    {
        protected $linkRepo;
        public function  __construct(LinkRepository $linkRepo)
            {
                $tnis->linkRepo = $linkRepo;
            }
    public function showIndex()
    {
        return View::make('index.index');
    }
      public function  postUrl()
    {
        $url = Input::get('url') ;
        $rules = array('url' => 'required|url');
        $validator = Valodator::make(array('url' => $url), $rules);
        if($validator->fails())
    
        {
            return Redirect::to('/')->withErrors($validator);
        }
        $id = $this->linkRepo->create($url);
        $shortUrl = URL::to('/', array($link));
        return View::make('index.link', array('link'=>$shortUrl));
    }
        public function getRedirect($id)
        {
            $url = $this->linkRepo->find($id);
            if(!$url)
            {
                $url='/';          
            }
            return Redirect::to($url);
        }
    }

