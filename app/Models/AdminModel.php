<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'jwp_admin';
    protected $allowedFields =
    [
        'admin_name',
        'admin_username',
        'admin_password'
    ];
}
