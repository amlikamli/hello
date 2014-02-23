<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
ob_start();
class Home extends CI_Controller {

	var $partneramli;
	
	var $partnerkamli;
	
 function __construct()
 {
 	$this->partneramli= "http://localhost:8016/amli/api.php";
 	
 	$this->partnerkamli = "http://localhost:8016/kamli/api.php";

 	parent::__construct();
 }

 function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     
     $data['file']='home/home';
     $this->load->view('templateuser',$data);
     
     //$this->load->view('home/home', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('user', 'refresh');
   }
 }

 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('home', 'refresh');
 }
 
 function transfer(){
 	
 	if($this->input->post("select_partner") == 'yes' )
 	{
 		//echo "<pre>"; print_r($this->input->post()); echo "<pre>"; die;
 		$this->session->set_userdata ( 'detail', $this->input->post() );
 		redirect('home/partner', 'refresh');
 	}
 	$data['file']='home/transfer';
 	$this->load->view('templateuser',$data);
 }
 
 function partner(){
 
 	if($this->input->post("sign_partner") == 'yes' )
 	{
 		//echo "<pre>"; print_r($this->input->post()); echo "<pre>"; die;
 		$action = $this->partneramli;
 		$dataFiels = $this->input->post();
 		
 		$result = $this->curlPrepation($action,$dataFiels);
 		
 		print_r($result);
 	}
 	
 	$session_data = $this->session->userdata('detail');
 	$data['file']='home/partner';
 	$data['tansfer'] = $session_data;
 	$this->load->view('templateuser',$data);
 }
 
 
 
 function reports(){
 	$data['file']='home/report';
 	$this->load->view('templateuser',$data);
 }
 
 private function curlPost( $url , $fields , $fields_string)
 {
 	//open connection
 	$ch = curl_init();
 
 	//set the url, number of POST vars, POST data
 	curl_setopt($ch,CURLOPT_URL, $url);
 	curl_setopt($ch,CURLOPT_POST, count($fields));
 	curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
 	//execute post
 	$result = curl_exec($ch);
 
 	//close connection
 	curl_close($ch);
 
 	return $result;
 
 }
 
 private function curlPrepation( $action , $data )
 {
 	//$url = $this->createLink($action);
 	$url = $action;
 	//$url = 'http://domain.com/get-post.php';
 	$fields = $data;
 
 	$fields_string = '';
 	//url-ify the data for the POST
 	foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
 	$fields_string = rtrim($fields_string, '&');
 
 	//echo $fields_string;
 
 	$result = $this->curlPost($url , $fields , $fields_string);
 
 	return $result;
 
 }
 

}

?>

