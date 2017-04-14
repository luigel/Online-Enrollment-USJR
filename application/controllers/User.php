<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	/**
	 * __construct function.
	 *
	 * @access public
	 * @return void
	 */
	public function __construct() {

		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
		$this->load->model('user_model');
		$this->load->model('email_model');
	}


	public function index() {

	}

	/**
	 * register function.
	 *
	 * @access public
	 * @return void
	 */
	public function register() {

		// create the data object
		$data = new stdClass();

		// load form helper and validation library
		$this->load->helper('html');
		$this->load->helper('form');
		$this->load->library('form_validation');
	  $this->load->library('email');

		// set validation rules
		$this->form_validation->set_rules('idnumber', 'ID Number', 'trim|required|numeric|min_length[10]|is_unique[users.IDNumber]', array('is_unique' => 'This ID Number already exists. Please choose another one.'));
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.Email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('password_confirm', 'Confirm Password', 'trim|required|min_length[6]|matches[password]');

		if ($this->form_validation->run() === false) {

			// validation not ok, send validation errors to the view
			$this->load->view('includes/head');
			$this->load->view('includes/header');
			$this->load->view('user/register/register', $data);
			$this->load->view('includes/footer');

		} else {

			// set variables from the form
			$idnumber   = $this->input->post('idnumber');
			$firstname  = $this->input->post('firstname');
			$middlename = $this->input->post('middlename');
			$lastname   = $this->input->post('lastname');
			$email      = $this->input->post('email');
			$password   = $this->input->post('password');
			$verificationcode = md5($this->user_model->generate_verification_code());
			if ($this->user_model->create_user($idnumber, $firstname, $middlename, $lastname, $password, $email, $verificationcode)) {

				if($this->email_model->send_email_verification($email, $verificationcode)) {

					// user creation ok
					$this->load->view('includes/head');
					$this->load->view('includes/header');
					$this->load->view('user/register/register_success', $data);
					$this->load->view('includes/footer');

				}

			} else {

				// user creation failed, this should never happen
				$data->error = 'There was a problem creating your new account. Please try again.';

				// send error to the view
				$this->load->view('includes/head');
				$this->load->view('includes/header');
				$this->load->view('user/register/register', $data);
				$this->load->view('includes/footer');

			}

		}

	}

	/**
	 * login function.
	 *
	 * @access public
	 * @return void
	 */
	public function login() {

		// create the data object
		$data = new stdClass();

		// load form helper and validation library
		$this->load->helper('html');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('email');

		// set validation rules
		$this->form_validation->set_rules('idnumber', 'IDNumber', 'required|numeric|min_length[10]');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == false) {

			// validation not ok, send validation errors to the view
			$this->load->view('includes/head');
			$this->load->view('includes/header');
			$this->load->view('user/login/login');
			$this->load->view('includes/footer');

		} else {

			// set variables from the form
			$idnumber = $this->input->post('idnumber');
			$password = $this->input->post('password');

			if ($this->user_model->resolve_user_login($idnumber, $password)) {

				//$user_id = $this->user_model->get_user_id_from_username($username);
				$user = $this->user_model->get_user($idnumber);

				// set session user datas
				$_SESSION['idnumber']  = (int)$user->IDNumber;
				$_SESSION['firstname'] = (string)$user->FirstName;
				$_SESSION['lastname']  = (string)$user->LastName;
				$_SESSION['logged_in'] = (bool)true;
				$_SESSION['verified']  = (bool)$user->Verified;

				// user login ok
				$this->load->view('includes/head');
				$this->load->view('includes/header');
				$this->load->view('user/login/login_success', $data);
				$this->load->view('includes/footer');

			} else {

				// login failed
				$data->error = 'Wrong username or password.';

				// send error to the view
				$this->load->view('includes/head');
				$this->load->view('includes/header');
				$this->load->view('user/login/login', $data);
				$this->load->view('includes/footer');

			}

		}

	}

	/**
	 * logout function.
	 *
	 * @access public
	 * @return void
	 */
	public function logout() {

		// create the data object
		$data = new stdClass();

		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {

			// remove session datas
			foreach ($_SESSION as $key => $value) {
				unset($_SESSION[$key]);
			}

			// user logout ok
			$this->load->view('includes/head');
			$this->load->view('includes/header');
			$this->load->view('user/logout/logout_success', $data);
			$this->load->view('includes/footer');

		} else {

			// there user was not logged in, we cannot logged him out,
			// redirect him to site root
			redirect('/');

		}

	}

	public function confirm_email($verificationcode){
		$this->load->helper('html');
		$this->load->helper('form');
		$this->load->library('form_validation');

			 if($this->user_model->verify_email($verificationcode)){
				 $this->session->set_flashdata('verify', '<div class="alert alert-success text-center">Email address is confirmed. Please login to the system</div>');
				 // user verify ok
				 $this->load->view('includes/head');
				 $this->load->view('includes/header');
				 $this->load->view('user/login/login');
				 $this->load->view('includes/footer');
			 }else{
					 $this->session->set_flashdata('verify', '<div class="alert alert-danger text-center">Email address is not confirmed. Please try to re-register.</div>');
					 $this->load->view('includes/head');
					 $this->load->view('includes/header');
					 $this->load->view('user/login/login');
					 $this->load->view('includes/footer');
			 }
	 }


}
