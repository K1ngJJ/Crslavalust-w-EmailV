<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class MainCntrl extends Controller {

  public function __construct(){
    parent:: __construct();
    $this->call->model('employeeModel', 'users');
  }

  public function getStart() {
    $this->call->view('getStart');
    }

  public function login() {
        $this->call->view('auth/login');
    }
  public function register()  {
        $this->call->view('auth/register');
    }

  public function home() {
    $this->call->view('home');
    }

  public function about() {
    $this->call->view('about');
    }

  public function service() {
    $this->call->view('service');
    }

  public function event() {
    $this->call->view('event');
    }

  public function contact() {
    $this->call->view('contact');
    }

  public function menu() {
    $this->call->view('menu');
    }

  public function book() {
    $this->call->view('book');
    }

  public function team() {
    $this->call->view('team');
    }

  public function blog() {
    $this->call->view('blog');
    }

  public function testimonial() {
    $this->call->view('testimonial');
    }
    


  //para sa login at register
  public function signup() {

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
      $this->call->library('form_validation');
      $this->form_validation
      ->name('name')
        ->required()  
      ->name('username')
        ->required()
        ->min_length(6)
        ->max_length(30)
      ->name('email')
        ->required()
        ->valid_email()
      ->name('password')
        ->required()
        ->custom_pattern("^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$", 'The password must contain a minimum of eight characters, at least one letter, one number and one special character:')
      ->name('confirmpassword')
        ->matches('password')
        ->required();

      if ($this->form_validation->run() == FALSE)
      {
          $data = [
              'errors' => $this->form_validation->errors(),
          ];
          $this->call->view('signup', $data);
      }
      else {
          $name = $_POST['name'];   
          $username = $_POST['username'];
          $email = $_POST['email'];
          $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
          $res_email = $this->users->CheckDupEmail($email);
          $res_name = $this->users->CheckDupUsername($username);
          
          if($res_email) {
              $this->session->set_flashdata('msg','A user exists with that email.');
              redirect('/signup');
          } else if ($res_name) {
              $this->session->set_flashdata('msg','A user exists with that username.');
              redirect('/signup');
          } else {
              $result = $this->users->RegUser($name ,$username, $email, $password);
              if ($result) {
                  $this->session->set_flashdata('msg','You have registered sucessfully.');
                  redirect('/signup');
              } else {
                  $this->session->set_flashdata('msg','Something went wrong.');
                  redirect('/signup');
              }
          }
      }
  }
  else{
    $this->call->view('auth/signup');
  }
}

}
?>
