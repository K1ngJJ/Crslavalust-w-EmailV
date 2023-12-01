<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class EmployeeModel extends Model {

    public function GetData(){
        $data = $this->db->table('table_employee')->get_all();
		return $data;
    }

    public function SelectedData($id){
        $ID = $id;
        $data = $this->db->table('table_employee')->where('id',$ID)->get();
		return $data;
    }

    public function DeleteData($id){
        $ID = $id;
        $data = $this->db->table('table_employee')->where('id',$ID)->delete();
		return $data;
    }

    public function SaveData($name,$email,$address,$phone){

        $bind = [
            'name' => $name,
            'email' => $email,
            'address' => $address,
            'phone' => $phone,
        ];
        
        return $this->db->table('table_employee')->insert($bind);
    }
    public function UpdateData($Id,$name,$email,$address,$phone){
        $ID = $Id;
        $bind = [
            'name' => $name,
            'email' => $email,
            'address' => $address,
            'phone' => $phone,
        ];
        
        return $this->db->table('table_employee')->where('id',$ID)->update($bind);
    }



    //para sa login tsaka register
    public function GetUser($id){
        return $this->db->table('table_user')->where('id',$id)->get();
    }

    public function CheckDupEmail($email) {
        return $this->db->table('table_user')->where('email',$email)->get();
    }

    public function CheckDupUsername($username) {
        return $this->db->table('table_user')->where('username',$username)->get();
    }

    public function RegUser($name, $username, $email, $password, $role){
        $bind = [
            'name' => $name,
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'role' => $role,
        ];
        return $this->db->table('table_user')->insert($bind);
    }
}
?>