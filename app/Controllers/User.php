<?php

namespace App\Controllers;

use App\Models\UserModel;
class User extends BaseController
{
    protected $UserModel;
    public function __construct()
    {
        $this->session = session();
        $this->UserModel = new UserModel();
    }
    
    public function index()
    {
        //cek apakah ada session bernama isLogin
        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }

        return view('user/dashboard');
    }

    public function delete($id)
    {
        $this->UserModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/admin/datauser');
    }

    public function tambah_siswa()
    {
        //cek apakah ada session bernama isLogin
        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }

        $data = [
            'validation' => \Config\Services::validation()
        ];

        return view('user/siswa', $data);
    }
    
}