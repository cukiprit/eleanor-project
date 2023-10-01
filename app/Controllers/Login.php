<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Login extends BaseController
{
    public function __construct()
    {
        helper(['form']);
    }

    public function index()
    {
        return view('login');
    }

    public function login()
    {
        $session = session();
        $userModel = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $data = $userModel->where('email', $email)->first();

        if ($data) {
            $pass = $data['password'];
            $authenticatePass = password_verify($password, $pass);

            if ($authenticatePass) {
                $ses_data = [
                    'id' => $data['user_id'],
                    'name' => $data['name'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                return redirect('admin');
            } else {
                $session->setFlashData('msg', 'Incorrect Password');
                return redirect('login');
            }
        } else {
            $session->setFlashData('msg', 'Incorrect Email');
            return redirect('login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect('login');
    }
}
