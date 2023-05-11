<?php

namespace App\Controllers;

class Home extends BaseController
{
    // public function index()
    // {
    //     return view('auth/login', [
    //         'config' => config('Auth'),
    //     ]);
    // }
    public function index()
    {
        return view('home');
    }

    public function im_tambah()
    {
        echo view('template/header');
        echo view('template/navbar');
        echo view('pemuatan/im-tambah');
        echo view('template/footer');
    }
    public function im_detail()
    {
        echo view('template/header');
        echo view('template/navbar');
        echo view('pemuatan/im-detail');
        echo view('template/footer');
    }
}
