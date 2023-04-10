<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->load->model('UserModel');
	}
	function index()
	{
		$this->load->view('registration');
		//return view('create');
	}
	public function register(){
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|alpha');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|alpha'); 
		$this->form_validation->set_rules('Email', 'Email', 'trim|required|valid_email|is_unique[lecturer_details.email]'); 
		$this->form_validation->set_rules('password', 'Password', 'trim|required'); 
		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|matches|[password]');
		if($this->form_validation->run() == FALSE)
		{
			echo "try again";
			//$this->index();
		} 
		else
		{
			$data = array(
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('first_name'),
				'Email' => $this->input->post('Email'),
				'password' => $this->input->post('password')

			);
			$register_user = new UserModel;
			$checking = $register_user->registerUser($data);
			if($checking)
			{
				$this->session->set_flashdata('status','Registered Successully.!', 'Go to Login');
				redirect(base_url('Login'));
			}
			else
			{
				$this->session->set_flashdata('status','Registered failed.!');
				redirect(base_url('register'));
			}
			//echo "hey there";
		}

	}

}
?>