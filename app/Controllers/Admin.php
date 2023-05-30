<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        return view('admin/survey');
    }

    public function manage_pertanyaan()
    {
        return view('admin/manage_pertanyaan');
    }
}
