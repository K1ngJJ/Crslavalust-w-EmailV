<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AdminCntrl extends Controller {

	public function __construct(){
        parent:: __construct();
        $this->call->model('EmployeeModel');
        
    }

	public function admin() {
		$data = [
			'employee' => $this->EmployeeModel->GetData(),
		];

		$this->call->view('admin', $data);
	}

    public function save() {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        
        if($id != null) {
            $result = $this->EmployeeModel->UpdateData($id,$name,$email,$address,$phone);
            if($result) {
                $data = [
                    'employee' => $this->EmployeeModel->GetData(),
                ];
                $this->call->view('admin', $data);
            }
            else{
                $data = [
                    'employee' => $this->EmployeeModel->GetData(),
                ];
                $this->call->view('admin', $data);
            }
		}
		else{
            $result = $this->EmployeeModel->SaveData($name,$email,$address,$phone);
            if($result) {
                $data = [
                    'employee' => $this->EmployeeModel->GetData(),
                ];
                $this->call->view('admin', $data);
			}
			else{
                $data = [
                    'employee' => $this->EmployeeModel->GetData(),
                ];
                $this->call->view('admin', $data);
            }
		};
	}
	
    public function edit($id) {
        $ID = $id;
        $data = [
            'selected' => $this->EmployeeModel->SelectedData($ID), 
            'employee' => $this->EmployeeModel->GetData(),
        ];

        $this->call->view('admin', $data);
    }

    public function delete($id) {
        $ID = $id;
        $result = $this->EmployeeModel->DeleteData($ID);
        if($result) {
            $data = [
                'employee' => $this->EmployeeModel->GetData(),
            ];
            $this->call->view('admin', $data);
        }
	}

    public function mail() {

    }    
}
?>