<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
ob_start();
class User extends CI_Controller {

 function __construct()
 {
   parent::__construct();

 }

 function index()
 {
   $this->load->helper(array('form'));
   $data['file']='user/login';
   $this->load->view('template',$data);
 }

 
 public function registration()
 {   
  $this->load->library('form_validation');
  // field name, error message, validation rules
  $this->form_validation->set_rules('firstname', 'First Name', 'trim|required|min_length[4]|xss_clean');
  $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required|min_length[4]|xss_clean');
  $this->form_validation->set_rules('username', 'User Name', 'trim|required|min_length[4]|xss_clean');
  $this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
  $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
  $this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');

  if($this->form_validation->run() == FALSE)
  {
   $data['file']='user/registration';
   $this->load->view('template',$data);
  }
  else
  {
	$data=array(
	'firstname'=>$this->input->post('firstname'),
	'lastname'=>$this->input->post('lastname'),
    'username'=>$this->input->post('username'),
    'email'=>$this->input->post('email_address'),
    'password'=>md5($this->input->post('password'))
	);
	$this->db->insert('users',$data);
 
   redirect('user');
  }
 }
}

?>

