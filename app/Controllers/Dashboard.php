<?php namespace App\Controllers;

use App\Models\DashboardModel;
use CodeIgniter\Controller;

class Dashboard extends BaseController
{
    public function index()
    {
        $model = new DashboardModel();

        $data = [
            'base_url'      => base_url(),
            'SMTPHost'      => config('Email')->SMTPHost,
            'environment'   => ENVIRONMENT,
            'last_logins'   => $model->getLastLogins(),
        ];

        return view('dashboard/index', $data);
    }

    //--------------------------------------------------------------------
}
