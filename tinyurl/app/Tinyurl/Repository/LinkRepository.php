<?php
namespace TinyURL\Repository;
class LinkRepository
{
public function create($url)
    {
        $link = new\Link();
         $link->url = $url;
        $link->save();
        return $link->id;

    }
}
