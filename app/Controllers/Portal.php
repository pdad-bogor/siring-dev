<?php

namespace App\Controllers;

class Portal extends BaseController
{
    public function index()
    {
        $data['title'] = 'Update Profile';
        if (user()->approved == 1) {
            return view('portal/dashboard', $data);
        } else {
            return view('portal/profile', $data);
        }
    }

    public function profil()
    {
        $data['title'] = 'My Profile';

        return view('portal/profil', $data);
    }

    public function im()
    {
        return view('portal/pemuatan/im');
    }

    public function addMuat()
    {
        return view('portal/pemuatan/add-im');
    }
}
