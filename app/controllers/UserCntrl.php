<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class UserCntrl extends Controller{

public function __construct(){
    parent::__construct();
    // $this->call->library('session');
    $this->getusers = $this->UserModel->getusers();
}
public function login(){
    return $this->call->view('auth/login');
}
public function register(){
    return $this->call->view('auth/register');
}
public function upload(){
    return $this->call->view('vfemail');
}



    public function create()
    {
        $email = $this->io->post('email');
        $password = $this->io->post('password');

        $data = array(
            "email" => $email,
            "password"=> password_hash($password,PASSWORD_DEFAULT),
            "status" => "unverified",
        );
        $this->UserModel->addUser($data);
        redirect('auth/login');
    }
    public function auth() {
        $email = $this->io->post('email');
        $password = $this->io->post('password');
        
        $users = $this->getusers;
        foreach ($users as $user) {
            if ($email == $user['email']) {
                if (password_verify($password, $user['password'])) {
                    if($user['status'] == "unverified")
                    {
                        $recepient_email = $email;
                        $subject = "Email Verification";
                        $content = "click the link to verify <a href='" . site_url("pending") . "/" . $user['id'] . "'>Link</a>";
                        $this->sendVerify($recepient_email,$subject,$content);
                        
                        $this->call->view('auth/login');
                        return;
                    } else {
                        $this->session->set_userdata('userEmail', $user['email']);
                        $data['email'] = $this->session->userdata('userEmail');
                        $this->call->view('home',$data);
                        return;
                    }
                } else {
                    redirect('auth/login');
                    return;
                }
            }
        }
        redirect('auth/login');
    }

    // public function logout()
    // {
    //     $this->session->sess_destroy();
    //     redirect('login');
    // }

    public function pending($id)
    {
        $data = $this->UserModel->searchUser($id);
        $data['status'] = "verified";
        if($data['status'] == "verified")
        {
            $this->UserModel->updateToken($id,$data);
            $this->session->set_userdata('userEmail', $data['email']);
            $this->call->view('home',$data);
        } else {
            $this->call->view('auth/login');
        }
    }

    public function sendVerify($recepient_email,$subject,$content)
    {
        $this->email->sender('pachecokingjj@gmail.com', 'Email_Validation');
        $this->email->recipient($recepient_email);
        $this->email->subject($subject);
        $this->email->email_content($content,"html");
        $this->email->send();
    }

    Public function uploadFile(){
        $this->call->library('upload', $_FILES["fileToUpload"]);
		$this->upload
			->set_dir('public')
			->allowed_extensions(array('jpg'))
			->allowed_mimes(array('image/jpeg'))
			->is_image();
		If($this->upload->do_upload()) {
			$data['filename'] = $this->upload->get_filename();
            
            $name = $this->io->post('name');
            $recepient_email = $this->io->post('email');
            $subject = $this->io->post('subject');
            $content = $this->io->post('content');
            $path = "public/" . $this->upload->get_filename();
            $this->sendAttatchedEmail($name, $recepient_email, $subject, $content, $path);
			$this->call->view('vfemail',$data);
		} else {
			$data['errors'] = $this->upload->get_errors();
			$this->call->view('vfemail', $data);
		}
    }

    public function sendAttatchedEmail($name,$recepient_email,$subject,$content,$path)
    {
        $fullContent = "Hello, <br><br>This is a sample email.<br>These are the email's contents: <br>" . $content;
        $this->email->sender($this->session->userdata('userEmail'), $name);
        $this->email->recipient($recepient_email);
        $this->email->subject($subject);
        $this->email->email_content($fullContent,'html');
        $this->email->attachment($path);
        $this->email->send();
    }

    public function logout()
{
    // Check if user is an admin or regular user
    $role = $this->session->userdata('role');

    if ($role == 'admin') {
        // Admin logout
        $this->session->unset_userdata(['user_id', 'email', 'IsLoggedIn', 'role']);
        // Additional admin logout logic if needed
        redirect('/login');  // Redirect to admin login page
    } else {
        // User logout
        $this->session->unset_userdata(['user_id', 'email', 'IsLoggedIn', 'role']);
        redirect('/login');  // Redirect to user login page
    }
}



    
}
?>
