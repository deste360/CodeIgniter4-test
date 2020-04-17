<?php namespace App\Models;

use CodeIgniter\Model;

class DashboardModel extends Model
{
    public function getLastLogins()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('auth_logins');
        $query   = $builder
        ->where(['success' => 1])
        ->limit(10)
        ->orderBy('id DESC')
        ->get();

        return $query->getResult();
    }
}
