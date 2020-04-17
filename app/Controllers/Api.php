<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Api extends Controller
{
    public function index()
    {
        redirect('/');
    }

    public function get()
    {
        $api_data = 'done';

        $email = \Config\Services::email();

        $email->setTo('andrea.destefani@coptron.com');
        $email->setSubject('Email Test');
        $email->setMessage('Testing the email class, by API without authentication.');

        $email->send();

        return $api_data;
    }

    //--------------------------------------------------------------------
}
