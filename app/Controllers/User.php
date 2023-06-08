<?php

namespace App\Controllers;

use App\Models\ProdiModel;
use App\Models\UserModel;

class User extends BaseController
{
    protected $prodi;
    protected $user;

    public function __construct()
    {
        $this->prodi = new ProdiModel();

        $this->user = new UserModel();
    }

    public function index()
    {
        $data['jurusan'] = $this->prodi->findAll();
        return view('admin/survey', $data);
    }

    public function create()
    {

        $data = $this->request->getPost(['id_prodi', 'nama_user', 'nim']);
        $this->user->insert($data);
        //  dd($data);
        return redirect()->back();
    }
}
