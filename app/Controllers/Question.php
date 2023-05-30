<?php

namespace App\Controllers;

use App\Models\QuestionModel;
use CodeIgniter\Controller;

class Question extends BaseController
{
    protected $pertanyaan;
    protected $table = "questions";

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

    public function simpan()
    {
        $question = $this->request->getPost();
        $this->pertanyaan->insert($question);
        return redirect()->back();
    }

    public function edit($id)
    {
        $data = $this->pertanyaan->where('id', $id)->first();
        return view('admin/update_pertanyaan', $data);
    }

    public function update($id)
    {
        $data = $this->request->getPost();
        $this->pertanyaan->update($id, $data);
        return redirect()->to(site_url('question'));
    }

    public function hapus($id)
    {
        $this->pertanyaan->delete($id);
        return redirect()->back();
    }
}
