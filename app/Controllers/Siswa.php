<?php

namespace App\Controllers;

use App\Models\SiswaModel;

class Siswa extends BaseController
{
    protected $siswaModel;
    public function __construct()
    {
        $this->siswaModel = new SiswaModel();
    }

    public function save()
    {
        // validation
        if (!$this->validate([
            'nama_siswa' => [
                'rules' => 'required',
            ],
            'nis' => [
                'rules' => 'required',
            ],
            'absen' => [
                'rules' => 'required',
            ],
            'kelas' => [
                'rules' => 'required',
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
            ]
        ])) {   
            $validation = \Config\Services::validation();
            return redirect()->to('/user/datasiswa')->withInput()-> with('validation', $validation);
        }

        $this->siswaModel->save([
            'nama_siswa' => $this->request->getVar('nama_siswa'),
            'nis' => $this->request->getVar('nis'),
            'absen' => $this->request->getVar('absen'),
            'kelas' => $this->request->getVar('kelas'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/user/datasiswa');
    }

    public function saveadmin()
    {
        // validation
        if (!$this->validate([
            'nama_siswa' => [
                'rules' => 'required',
            ],
            'nis' => [
                'rules' => 'required',
            ],
            'absen' => [
                'rules' => 'required',
            ],
            'kelas' => [
                'rules' => 'required',
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
            ]
        ])) {   
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/datasiswa')->withInput()-> with('validation', $validation);
        }

        $this->siswaModel->save([
            'nama_siswa' => $this->request->getVar('nama_siswa'),
            'nis' => $this->request->getVar('nis'),
            'absen' => $this->request->getVar('absen'),
            'kelas' => $this->request->getVar('kelas'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/admin/datasiswa');
    }

    public function delete($id)
    {
        $this->siswaModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/admin/datasiswa');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Data Siswa',
            'validation' => \Config\Services::validation(),
            'siswa' => $this->siswaModel->getSiswa($id)
        ];

        return view('admin/edit/siswa', $data);
    }

    public function update($id) {
        // validation
        if (!$this->validate([
            'nama_siswa' => [
                'rules' => 'required',
            ],
            'nis' => [
                'rules' => 'required',
            ],
            'absen' => [
                'rules' => 'required',
            ],
            'kelas' => [
                'rules' => 'required',
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
            ]
        ])) {   
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/edit/siswa' . $this->request->getVar('id'))->withInput()-> with('validation', $validation);
        }

        $this->siswaModel->save([
            'id' => $id,
            'nama_siswa' => $this->request->getVar('nama_siswa'),
            'nis' => $this->request->getVar('nis'),
            'absen' => $this->request->getVar('absen'),
            'kelas' => $this->request->getVar('kelas'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diedit.');
        return redirect()->to('/admin/datasiswa');
    }

}
