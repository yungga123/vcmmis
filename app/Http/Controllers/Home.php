<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Home extends Controller
{
    public function index() {

        $data['title'] = 'First Page';

        echo view('templates/header', $data);
        echo view('templates/navbar');
        echo view('homepage/homepage');
        echo view('templates/footer');
    }
}
