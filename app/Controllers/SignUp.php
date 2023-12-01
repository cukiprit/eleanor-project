<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use Faker\Factory;

class SignUp extends BaseController
{
    public function __construct()
    {
        helper(['form']);
    }

    public function index()
    {
        // $data = [];

        $validation = \Config\Services::validation();
        $validation->setRules([
            'name' => 'required|min_length[3]|max_length[50]',
            'email' => 'required|valid_email',
            'password' => 'required|min_length[3]|max_length[50]',
            'confirm_password' => 'matches[password]',
            'role' => 'required',
        ]);

        if ($this->request->getServer('REQUEST_METHOD') == 'POST') {
            $isDataValid = $validation->withRequest($this->request)->run();

            if ($isDataValid) {
                $model = new UserModel();
                $faker = Factory::create();

                $data = [
                    'user_id' => $faker->uuid(),
                    'name' => $this->request->getPost('name'),
                    'email' => $this->request->getPost('email'),
                    'role' => $this->request->getPost('role'),
                    'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                ];

                $model->insert($data);

                return redirect('login');
            } else {
                $data['errors'] = $validation->getErrors();
                return view('signup', $data);
            }
        } else {

            return view('signup');
        }
    }
}
