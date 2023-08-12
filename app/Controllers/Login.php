<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        // inisiasi tabel dari model admin
        $ModelAdmin = new \App\Models\AdminModel();
        $login = $this->request->getPost('login');
        if ($login) {
            // ambil input form login
            $admin_username = $this->request->getPost('admin_username');
            $admin_password = $this->request->getPost('admin_password');

            // check jika kosong dan username tidak sesuai
            $db = \Config\Database::connect();
            $query = $db->table('jwp_admin')->getWhere(['admin_username' => $admin_username]);
            $user = $query->getRow();
            if ($admin_username == '' or $admin_password == '') {
                $err = 'Silahkan input Username dan Password';
            } else if (!$user) {
                $err = "Username tidak sesuai";
            }

            // check password
            if (empty($err)) {
                $dataAdmin = $ModelAdmin->where('admin_username', $admin_username)->first();
                if ($dataAdmin['admin_password'] != $admin_password) {
                    $err = "Password tidak sesuai";
                }
            }

            // jika tidak ada error, buat session data sesi
            if (empty($err)) {
                $dataSesi = [
                    'admin_id' => $dataAdmin['admin_id'],
                    'admin_name' => $dataAdmin['admin_name'],
                    'admin_username' => $dataAdmin['admin_username'],
                    'admin_password' => $dataAdmin['admin_password']
                ];
                session()->set($dataSesi);
                return redirect()->to('Admin/admin_home');
            }

            // jika error buat notifikasi
            if ($err) {
                session()->setFlashdata('admin_username', $admin_username);
                session()->setFlashdata('error', $err);
                return redirect()->to('login');
            }
        }
        return view('login_view');
    }
}
