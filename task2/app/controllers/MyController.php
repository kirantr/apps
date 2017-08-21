<?php

 class MyController extends BaseController
 {

     public function showArtists()
     {
         $artist = Artist::where('ArtistId', '<=', 20)->get();
         return View::make('artists')->with('artist', $artist);
     }

     public function getArtist($id)
     {
         $albums = Artist::find($id)->albums()->get()->toArray();
         $artist = Artist::find($id);
         $name = '';
         foreach ($artist as $n): $name = $artist['Name'];
         endforeach;
         return View::make('artist', ['id' => $id, 'albums' => $albums, 'name' => $name]);
     }

     public function getAlbum($id)
     {
         $tracks = Album::find($id)->tracks()->get()->toArray();
         $genre = Track::find($id)->genre()->get()->toArray();
         $artist = Album::find($id)->artist()->get();
         $genreName = '';
         foreach ($genre as $g): $genreName = $g['Name'];
         endforeach;
         return View::make('album', ['id' => $id, 'tracks' => $tracks,
                 'genre' => $genreName, 'artist' => $artist]);
     }

     public function getTrack($id)
     {
         $track = Track::find($id);
         $genre = Genre::find($track->GenreId);
         $albumId = Track::find($id)->album()->get()->toArray();
         $artistId = '';
         $album = '';
         foreach ($albumId as $id)
         {
             $album = $id['Title'];
             $artistId = $id['ArtistId'];
         }
         $artist = Artist::find($artistId);
         return View::make('track', ['track' => $track, 'genre' => $genre,
                 'artist' => $artist, 'album' => $album]);
     }

 }
 