<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Settings extends BaseController
{
    public function users()
    {
        $roles = [1 => 'Vendedor', 2 => 'Administrador', 3 => 'Superadmin'];

        $data = array_merge($this->data, [
            'title' => 'Users Page',
            'Users' => $this->ApplicationModel->getUser(),
            'Roles' => $roles // se precisar no view
        ]);
        return view('pages/settings/users', $data);
    }

    public function createUser()
    {
        if (!$this->validate(['inputUsername' => ['rules' => 'is_unique[users.username]']])) {
            session()->setFlashdata('notif_error', 'User already exists!');
            return redirect()->to(base_url('dashboard/users'));
        }

        $createUser = $this->ApplicationModel->createUser($this->request->getPost(null, FILTER_UNSAFE_RAW));
        if ($createUser) {
            session()->setFlashdata('notif_success', 'Successfully added new user');
        } else {
            session()->setFlashdata('notif_error', 'Failed to add new user');
        }
        return redirect()->to(base_url('dashboard/users'));
    }

    public function updateUser()
    {
        $updateUser = $this->ApplicationModel->updateUser($this->request->getPost(null, FILTER_UNSAFE_RAW));
        if ($updateUser) {
            session()->setFlashdata('notif_success', 'Successfully updated user data');
        } else {
            session()->setFlashdata('notif_error', 'Failed to update user data');
        }
        return redirect()->to(base_url('dashboard/users'));
    }

    public function deleteUser($userID)
    {
        if (!$userID) return redirect()->to(base_url('dashboard/users'));

        $deleteUser = $this->ApplicationModel->deleteUser($userID);
        if ($deleteUser) {
            session()->setFlashdata('notif_success', 'Successfully deleted user');
        } else {
            session()->setFlashdata('notif_error', 'Failed to delete user');
        }
        return redirect()->to(base_url('dashboard/users'));
    }
}
