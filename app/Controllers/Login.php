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
        $session = session();

        if (session()->get('isLoggedIn')) {
            return redirect('admin');
        }

        $validation = \Config\Services::validation();
        $validation->setRules([
            'email' => 'required|valid_email',
            'password' => 'required|min_length[3]|max_length[50]'
        ]);

        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            $model = new UserModel();
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $data = $model->where('email', $email)->first();

            if ($data) {
                $pass = $data['password'];
                $authenticatePass = password_verify($password, $pass);

                if ($authenticatePass) {
                    $ses_data = [
                        'id' => $data['user_id'],
                        'name' => $data['name'],
                        'isLoggedIn' => TRUE,
                        'role' => $data['role']
                    ];
                    $session->set($ses_data);
                    return redirect('admin');
                } else {
                    $session->setFlashdata('msg', 'Incorrect Password');
                    return redirect('login');
                }
            } else {
                $session->setFlashdata('msg', 'Incorrect Email');
                return redirect('login');
            }
        }

        return view('login');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect('login');
    }
}
