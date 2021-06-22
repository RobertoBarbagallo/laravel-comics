<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicsController extends Controller
{
    function  comics () {
        $comicsList = config('comics');
        return view('comics', [
            "comicsArray" => $comicsList
        ]);
    }

    function singleComic ($id) {
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
