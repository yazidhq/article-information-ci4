<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table = 'jwp_artikel';
    protected $allowedFields =
    [
        'admin_name',
        'artikel_judul',
        'artikel_isi',
        'status_komentar',
    ];

    public function search($keyword)
    {
        return $this->table('jwp_artikel')->like('artikel_judul', $keyword);
    }
}
