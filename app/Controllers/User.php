<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class User extends BaseController
{
    protected $UserModel;
    public function __construct()
    {
        $this->UserModel = new UserModel();
    }

    public function index()
    {
        $data = [
            'users' => $this->UserModel->where('role !=', 'Super-Admin')->findAll()
        ];

        return view('super-admin/index', $data);
    }

    public function create()
    {
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'role' => $this->request->getPost('role'),
            'password' => password_hash($this->request->getPost('passowrd'), PASSWORD_DEFAULT)
        ];

        $this->UserModel->insert($data);

        return redirect('admin/user');
    }

    public function edit($user_id)
    {
        $user = $this->UserModel->where('user_id', $user_id)->first();

        return $this->response->setJSON($user);
    }

    public function edit_data($user_id)
    {
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'role' => $this->request->getPost('role')
        ];

        $this->UserModel->update($user_id, $data);

        return redirect('admin/user');
    }

    public function delete_user($user_id)
    {
        $deleted = $this->UserModel->delete($user_id);

        return $this->response->setJSON(['success' => $deleted]);
    }
}
