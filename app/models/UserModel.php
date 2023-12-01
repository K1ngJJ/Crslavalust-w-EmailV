<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class UserModel extends Model {
    public function getusers()
    {
        return $this->db->table('table_user')->get_all();
    }
     public function addUser($data)
     {
        return $this->db->table('table_user')->insert($data);
     }

     public function searchUser($id)
    {
        return $this->db->table('table_user')->where('id', $id)->get();
    }

    public function updateToken($id, $data) {
        return $this->db->table('table_user')->where('id', $id)->update($data);
    }

     public function getEmail($email)
     {
         return $this->db->table('table_user')->where('email', $email)->get();
     }

     public function getUserById($userId)
     {
         return $this->db->table('table_user')->where('id', $userId)->get();
     }
}
?>
