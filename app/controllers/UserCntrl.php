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
        redirect('login');
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
                        
                        $this->call->view('errors/error_404');
                        return;
                    } else {
                        $this->session->set_userdata('userEmail', $user['email']);
                        $data['email'] = $this->session->userdata('userEmail');
                        $this->call->view('home',$data);
                        return;
                    }
                } else {
                    redirect('login');
                    return;
                }
            }
        }
        redirect('login');
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
            $this->call->view('errors/error_404');
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

Public function send($email,$name,$subject,$content,$path)
{
    $fullContent = "Hello, <br><br>This is a sample email.<br>These are the email's contents: <br>" . $content;
    $this->email->recipient($email);
    $this->email->sender($this->session->userdata('userEmail'), $name);

    $this->email->subject($subject);
    $this->email->email_content($fullContent,'html');
    $this->email->attachment($path);
    $this->email->send();
}

    
}
?>