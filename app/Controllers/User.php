<?php

namespace App\Controllers;

class User extends Admin
{
    public function user_home()
    {
        $data = [
            'title' => 'Home'
        ];
        return view('user/home', $data);
    }

    // tampil mading
    public function mading()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $artikel = $this->artikelModel->search($keyword);
        } else {
            $artikel = $this->artikelModel;
        }
        $data = [
            'title' => 'Mading',
            'artikel' => $artikel->orderBy('artikel_id', 'DESC')->findAll()
        ];
        return view('user/mading', $data);
    }

    // detail mading
    public function detail_artikel($id)
    {
        $data = [
            'title' => 'Detail Artikel',
            'artikel' => $this->artikelModel->where(['artikel_id' => $id])->first(),
            'komentar' => $this->komentarModel->where(['artikel_id' => $id])->orderBy('artikel_id', 'DESC')->findAll(),
            'total_komentar' => $this->komentarModel->table('jwp_komentar')->where(['artikel_id' => $id])->countAllResults()
        ];
        return view('user/detail-artikel', $data);
    }

    // tambah komentar artikel
    public function tambah_komentar()
    {
        $this->komentarModel->save([
            'artikel_id' => $this->request->getPost('artikel_id'),
            'komentar_nama' => $this->request->getVar('komentar_nama'),
            'komentar_email' => $this->request->getVar('komentar_email'),
            'komentar_isi' => $this->request->getVar('komentar_isi')
        ]);
        return redirect()->to('user/mading');
    }
}
