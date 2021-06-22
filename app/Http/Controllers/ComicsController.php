<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comic;

class ComicsController extends Controller
{
    public function  comics () {
        
        // $newComic = new Comic ();

        // $newComic->id = 1;
        // $newComic->title = "Action Comics #1000: The Deluxe Edition";
        // $newComic->description = "The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics 1 and 2 from 1938!";
        // $newComic->thumb = "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX";
        // $newComic->price = 19.99;
        // $newComic->series = "Action Comics";
        // $newComic->sale_date = "2018-10-02";
        // $newComic->type = "comic book";
      
        // $newComic->save();


        // $comicsList = Comic::all();

        $comicsList =config('comics');


        return view('comics', [
            "comicsArray" => $comicsList
        ]);
    }

    public function singleComic ($id) {
        $comicsList = config('comics');
        $savedComic = null;
        foreach ($comicsList as $comic) {
            if ($comic['id'] ===  intval($id)) {
                $savedComic = $comic;
            }
        }
        if (is_null($savedComic)) {
            return abort(404, "prodotto non trovato");
        } else {
            return view('singleComic', [
                'comic' => $savedComic
            ]);
        }
    }
}
