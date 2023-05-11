<?php

namespace App\Controllers;

class Inhouse extends BaseController
{
    public function index()
    {
        $data['title'] = 'Update Profile';
        if (user()->approved == 1) {
            return view('inhouse/dashboard', $data);
        } else {
            return view('inhouse/profile', $data);
        }
    }

    public function im_keputusan()
    {
        $data['title'] = 'Keputusan';

        return view('portal/im-keputusan', $data);
    }
}
