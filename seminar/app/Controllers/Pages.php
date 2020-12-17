<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Komik'
        ];

        return view('pages/home', $data);
    }
}
