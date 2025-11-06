<?php

namespace App\Models;

use CodeIgniter\Model;

class ApplicationModel extends Model
{
    /**
     * Retorna um ou vários usuários.
     */
    public function getUser($username = false, $userID = false)
    {
        $builder = $this->db->table('users')->select('*, users.id AS userID');

        if ($username) {
            return $builder->where('username', $username)->get()->getRowArray();
        } elseif ($userID) {
            return $builder->where('id', $userID)->get()->getRowArray();
        }

        return $builder->get()->getResultArray();
    }

    /**
     * Cria novo usuário.
     * Role deve ser 1, 2 ou 3.
     */
    public function createUser($dataUser)
    {
        $role = in_array($dataUser['inputRole'], [1, 2, 3]) ? $dataUser['inputRole'] : 1; // default vendedor

        return $this->db->table('users')->insert([
            'fullname'   => $dataUser['inputFullname'],
            'username'   => $dataUser['inputUsername'],
            'password'   => password_hash($dataUser['inputPassword'], PASSWORD_DEFAULT),
            'role'       => $role,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }

    /**
     * Atualiza usuário existente.
     * Role deve ser 1, 2 ou 3.
     */
    public function updateUser($dataUser)
    {
        $password = $dataUser['inputPassword']
            ? password_hash($dataUser['inputPassword'], PASSWORD_DEFAULT)
            : $this->getUser(userID: $dataUser['userID'])['password'];

        $role = in_array($dataUser['inputRole'], [1, 2, 3]) ? $dataUser['inputRole'] : 1; // default vendedor

        return $this->db->table('users')->update([
            'fullname' => $dataUser['inputFullname'],
            'username' => $dataUser['inputUsername'],
            'password' => $password,
            'role'     => $role,
        ], ['id' => $dataUser['userID']]);
    }

    /**
     * Exclui usuário pelo ID.
     */
    public function deleteUser($userID)
    {
        return $this->db->table('users')->delete(['id' => $userID]);
    }
}
