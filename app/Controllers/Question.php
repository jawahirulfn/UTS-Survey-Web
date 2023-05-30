<?php

namespace App\Controllers;

use App\Models\QuestionModel;
use CodeIgniter\Controller;

class Question extends BaseController
{
    protected $pertanyaan;

    public function __construct()
    {
        $this->pertanyaan = new QuestionModel();
    }

    public function index()
    {
        $data['quest'] = $this->pertanyaan->getdata();
        // $getdata = $this->pertanyaan->findAll();

        // $data = array(
        //     'x' => $getdata,
        // );

        // dd($data);
        return view('admin/manage_pertanyaan', $data);
    }
}
