<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	protected $isLoggedIn;

	public function __construct(){
		parent::__construct();
		$this->load->model('register_model');
	}
	
	public function index()
	{
		//$this->load->view('welcome_message');
		$this->load->view('login');
	}
	public function helper()
	{	
		$this->load->view('helper');
	}

	public function customer()
	{	
		$this->load->view('customer');
	}

	// USER SEE REGISTER FORM
	public function register($id='')
	{
		if(!empty($id)) {
				$data['userdata'] = $this->register_model->get_register_data($id);
				$this->load->view('register',$data);
			} else {
				$this->load->view('register');
			}	
	}


	// THIS IS OUR HOME PAGE
	public function home()
	{	
		if($this->session->userdata('isLoggedIn')){
			$this->load->view('partials/header');
			$this->load->view('partials/navbar');
			$this->load->view('partials/sidebar');
			$this->load->view('dashbord');
			$this->load->view('partials/footer');
		}
		else{
			redirect('welcome');	
		}
		
	}

	// USER FEEDBACK INSERT OR UPDATE
	public function feedback($id='')
	{
		if($this->session->userdata('isLoggedIn')){
			$this->load->view('partials/header');
			$this->load->view('partials/navbar');
			$this->load->view('partials/sidebar');
			if(!empty($id)) {
				$data['feedback'] = $this->register_model->get_feedback_data($id); 
				$this->load->view('feedback',$data);
			} else {
				$this->load->view('feedback');
			}
			$this->load->view('partials/footer');
		}
		else{
			redirect('welcome');	
		}
		
	}

	// REGISTER USER DATA SHOW
	public function viewuser()
	{	
		if($this->session->userdata('isLoggedIn')){
			$this->load->view('partials/header');
			$this->load->view('partials/navbar');
			$this->load->view('partials/sidebar');
			$data['users'] = $this->register_model->viewuser();
			$this->load->view('viewuser',$data);
			$this->load->view('partials/footer');
			
		}
		else{
			redirect('welcome');	
		}
		
	}

	// USER FEEDBACK DATA SHOW
	public function viewfeedback()
	{	
		if($this->session->userdata('isLoggedIn')){
			$this->load->view('partials/header');
			$this->load->view('partials/navbar');
			$this->load->view('partials/sidebar');
			$data['feedback'] = $this->register_model->viewfeedback();
			$this->load->view('viewfeedback',$data);
			$this->load->view('partials/footer');
			
		}
		else{
			redirect('welcome');	
		}
		
	}

	// USER LOGOUT OUR ID
	public function logout()
	{	
		$data =$this->session->userdata();
		$this->session->unset_userdata($data);
		$this->session->sess_destroy();
		redirect('welcome');
	}

	// IF USER REGISTER
	public function insert_data()
	{
		$posted_data= $this->input->post();
		if (isset($posted_data['btn-submit'])) {
			$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
			$this->form_validation->set_rules('firstname','firstname','required');
			$this->form_validation->set_rules('lastname','lastname','required');
			$this->form_validation->set_rules('password','password','required|min_length[5]|max_length[8]');
			$this->form_validation->set_rules('cnfpassword','cnfpassword','required|matches[password]');
			$this->form_validation->set_rules('contact','contact','required|min_length[10]|max_length[10]');
			$this->form_validation->set_rules('email','email','required|valid_email');
			$this->form_validation->set_rules('gender', 'gender','required', array(
                'required'      => 'please select one',
        	));
			if ($this->form_validation->run() == FALSE) {
				$this->register();
			}else{
				$resposne = $this->register_model->insert($posted_data);
				if($resposne) {
					redirect('welcome');
				} 
			}
		}else{
			redirect(site_url('welcome/register'),'refresh');
		}	
	}

	// IF USER LOGIN CHECK
	public function login_check()
	{	
		$posted_data = $this->input->post();
		$email= $posted_data['email'];
		$password= $posted_data['password'];
		if (isset($posted_data['btn-login'])) {
			$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
			$this->form_validation->set_rules('email','email Id','required|valid_email');
			$this->form_validation->set_rules('password','password','required|min_length[5]|max_length[8]');

			if ($this->form_validation->run() == FALSE) {
				$this->index();
			}else{
				$users_data= $this->register_model->login($email, $password);
				if(is_array($users_data)){
					$this->session->set_userdata($users_data);
					$this->session->set_userdata('isLoggedIn',true);
					redirect('welcome/home');
				}
			}
		}else{
			redirect(site_url('welcome/index'),'refresh');
		}
		
		
	}


	// IF USER GIVE FEEDBACK
	public function feedback_data()
	{
		
		$posted_data= $this->input->post();
		$resposne = $this->register_model->feedback($posted_data);
		if($resposne) {
			redirect('welcome/home');
		} 
	}

	// IF USER  FEEDBACK DELETE
	public function register_delete($id='')
	{
		$resposne = $this->register_model->register_delete($id);
		if($resposne) {
			redirect('welcome/viewuser');
		} 
	}

	// IF USER  FEEDBACK DELETE
	public function feedback_delete($id='')
	{
		$resposne = $this->register_model->feedback_delete($id);
		if($resposne) {
			redirect('welcome/viewfeedback');
		} 
	}

	// HELPER FUNCTION 
	public function url_helper()
	{
		//echo "Hello ".$parm1;
		//echo "<img src='".base_url('assets/images/Screenshot_1.png')."' >";
		echo "base url is : " . base_url('assets/images/Screenshot_1.png');
		echo "<hr/>";
		echo "site url is : " . site_url();
		echo "<hr/>";
		echo "current url is : " . current_url();
		echo "<hr/>";
		echo "uri string : " . uri_string();
		echo "<hr/>";
		echo $this->uri->segment(1);
		echo "<hr/>";
		echo $this->uri->segment(2);
		echo "<hr/>";
		echo $this->uri->segment(3);
		echo "<hr/>";
		echo $this->uri->segment(4);
		echo "<hr/>";
		echo index_page();
		echo "<hr/>";
		//echo redirect('welcome/register');
	}

	public function html_helper()
	{
		echo heading('This is heading!');
		echo "<hr/>";
		$src = base_url('assets/images/img_function2.png');
		echo "img function : ". img($src);
		echo "<hr/>";
		$href = ('assets/images/link_tag.png');
		echo "link tag function : this function use link any file" .link_tag($href);
		echo "<hr/>";
		echo "br function : THIS IS MY FIRST ".br(2); echo   "PROJECT";
		echo "<hr/>";
		echo "nbs function : hello ". nbs(5); echo "how are uhh?";
	}

	public function form_helper()
	{
		echo "form open function : " .form_open('customer', '');
		echo "<hr/>";
		echo "form open multipart : " .form_open_multipart();
		echo "<hr/>";
		echo "form input : " .form_input();
		echo "<hr/>";
		echo "form password function :" .form_password();
		echo "<hr/>";
		echo "form upload function : ".form_upload();
		echo "<hr/>";
	}

	public function date_helper()
	{
		echo "now function is : " .now();
		echo "<hr/>";
		$datestr = "year : %y month : %M day: %D - %h:%i:%s %a";
		$time = time();
		echo "mdate function is : " .mdate($datestr,$time);
		echo "<hr/>";
		$month = "6";
		$year = "2002";
		echo "days in month function is :" . days_in_month($month,$year);
		echo "<hr/>";
		echo "date range function is : " . br();
		$range = date_range('2002-04-01', '2002-04-06');
        foreach ($range as $date)
        {
            echo $date.br();
        }
        echo form_dropdown('date',$range);
		echo "<hr/>";
		echo "timezone menu function is :  " . timezone_menu();
		echo "<hr/>";
		// $date1 = date_create("2002-04-06");  
		// $date2 = date("Y-m-d"); 
		// echo date_diff($date1,$date2);
		 
 	}

 	public function directory_map()
 	{
 		echo "<pre>";
 		print_r (directory_map('./application'));
 		echo "</pre>";
 	}

 	public function security_helper()
 	{
 		echo "xss function is : ".  xss_clean("hii");
 		echo "<hr/>";
 		$filename = 'welcome/index';
 		echo "sanitize filename is : " .  sanitize_filename($filename);
 		echo "<hr/>";
 		echo "encode php tag is : " . encode_php_tags("hello");
 		echo "<hr/>";
 		echo "do_hash :" .hash('md5' , 'hello');
 	}

}
