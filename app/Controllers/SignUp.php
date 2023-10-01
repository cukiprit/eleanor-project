<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class SignUp extends BaseController
{
    public function __construct()
    {
        helper(['form']);
    }

    public function index()
    {
        $data = [];
        return view('signup', $data);
    }

    public function signup()
    {
        $rules = [
            'name' => 'required|min_length[3]|max_length[50]',
            'email' => 'required|valid_email',
            'password' => 'required|min_length[3]|max_length[50]',
            'confirm_password' => 'matches[password]',
        ];

        if ($this->validate($rules)) {
            $model = new UserModel();

            $data = [
                // 'user_id' => uniqid('Admin_', TRUE),
                'name' => $this->request->getVar('name'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            ];

            if ($model->save($data) === false) {
                $errors = $model->errors();

                $data['validation'] = $errors;
                return view('signup', $data);
            } else {
                $model->save($data);
                return redirect('login');
            }
        } else {
            $data['validation'] = $this->validator;
            return view('signup', $data);
        }
    }
}
