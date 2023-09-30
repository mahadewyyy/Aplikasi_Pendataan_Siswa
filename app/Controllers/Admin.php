<?php

namespace App\Controllers;

use App\Models\SiswaModel;

class Admin extends BaseController
{

    protected $session;

    protected $siswaModel;
    
    public function __construct()
    {
        $this->session = session();
        $this->siswaModel = new SiswaModel();
    }
    
    public function dashboard()
    {   
        //cek apakah ada session bernama isLogin
        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }

        $data = [
            'title' => 'dashboard'
        ];
        
        return view('admin/dashboard', $data);
        
    }

    public function siswa()
    {
        //cek apakah ada session bernama isLogin
        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }

        $data = [
            'title' => 'Data Siswa',
            'siswa' => $this->siswaModel->findAll()
        ];

        return view('admin/siswa', $data);

    }

    public function tambah_siswa()
    {
        //cek apakah ada session bernama isLogin
        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }

        $data = [
            'title' => 'Tambah Siswa',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/tambah/siswa', $data);
    }

}