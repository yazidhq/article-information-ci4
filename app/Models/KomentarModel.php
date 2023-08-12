<?php

namespace App\Models;

use CodeIgniter\Model;

class KomentarModel extends Model
{
    protected $table = 'jwp_komentar';
    protected $allowedFields =
    [
        'artikel_id',
        'komentar_nama',
        'komentar_email',
        'komentar_isi'
    ];
}
