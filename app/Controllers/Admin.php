<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use App\Models\KomentarModel;

class Admin extends BaseController
{
    protected $artikelModel;
    protected $komentarModel;

    public function __construct()
    {
        $this->artikelModel = new ArtikelModel();
        $this->komentarModel = new KomentarModel();
    }

    // halaman utama admin
    public function admin_home()
    {
        $data = [
            'title' => 'Admin Home'
        ];
        return view('admin/admin-home', $data);
    }

    // halaman mading
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
            'artikel' => $artikel->orderBy('artikel_id', 'DESC')->findAll(),
            'aktif_komentar' => $artikel->where('status_komentar', '1')->orderBy('artikel_id', 'DESC')->findAll(),
            'nonaktif_komentar' => $artikel->where('status_komentar', '0')->orderBy('artikel_id', 'DESC')->findAll()
        ];
        return view('admin/mading', $data);
    }

    // formulir tambah artikel
    public function tambah_artikel()
    {
        $data = [
            'title' => 'Tambah Artikel'
        ];
        return view('admin/tambah-artikel', $data);
    }

    // proses tambah artikel
    public function proses_tambah()
    {
        $this->artikelModel->save([
            'artikel_judul' => $this->request->getVar('artikel_judul'),
            'artikel_isi' => $this->request->getVar('artikel_isi'),
            'status_komentar' => $this->request->getVar('status_komentar'),

        ]);
        return redirect()->to('admin/mading');
    }

    public function aktifkan_komentar($id)
    {
        $this->artikelModel->query("UPDATE jwp_artikel SET status_komentar = 1 WHERE artikel_id = '$id'");
        return redirect()->to('admin/mading');
    }

    public function nonaktifkan_komentar($id)
    {
        $this->artikelModel->query("UPDATE jwp_artikel SET status_komentar = 0 WHERE artikel_id = '$id'");
        return redirect()->to('admin/mading');
    }

    // detail mading
    public function detail_artikel($id)
    {
        $data = [
            'title' => 'Detail Artikel',
            'detail' => $this->artikelModel->where(['artikel_id' => $id])->first(),
            'total_komentar' => $this->komentarModel->table('jwp_komentar')->where(['artikel_id' => $id])->countAllResults()
        ];
        return view('admin/detail-artikel', $data);
    }

    // hapus artikel
    public function hapus_artikel($id)
    {
        $data['artikel'] = $this->artikelModel->where('artikel_id', $id)->delete();
        return redirect()->to(base_url('Admin/mading'));
    }

    // laporan
    public function tampil_laporan()
    {
        $data = [
            'title' => 'Laporan Artikel',
            'artikel' => $this->artikelModel->table('jwp_artikel')->countAllResults(),
            'komentar' => $this->komentarModel->table('jwp_komentar')->countAllResults()
        ];
        return view('admin/laporan', $data);
    }

    // lihat komentar
    public function tampil_komentar($id)
    {
        $data = [
            'title' => 'Detail Artikel',
            'artikel' => $this->artikelModel->where(['artikel_id' => $id])->first(),
            'komentar' => $this->komentarModel->where(['artikel_id' => $id])->orderBy('artikel_id', 'DESC')->findAll()
        ];
        return view('admin/tampil-komentar', $data);
    }

    // hapus komentar
    public function hapus_komentar($id)
    {
        $data['komentar'] = $this->komentarModel->where('komentar_id', $id)->delete();
        return redirect()->to(base_url('Admin/mading'));
    }

    // logout
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/admin');
    }
}
