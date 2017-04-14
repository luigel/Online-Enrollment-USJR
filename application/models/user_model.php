
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * users class.
 *
 * @extends CI_Model
 */
class user_model extends CI_Model {
	/**
	 * __construct function.
	 *
	 * @access public
	 * @return void
	 */
	public function __construct() {

		parent::__construct();
		$this->load->database();

	}

	/**
	 * create_user function.
	 *
	 * @access public
	 * @param mixed $username
	 * @param mixed $email
	 * @param mixed $password
	 * @return bool true on success, false on failure
	 */
	public function create_user($idnumber, $firstname, $middlename, $lastname, $password, $email, $verificationcode) {
		$data = array(
			'IDNumber'  => $idnumber,
			'FirstName'  => $firstname,
      'MiddleName'  => $middlename,
      'LastName'  => $lastname,
			'Password'   => $this->hash_password($password),
      'Email'  => $email,
			'VerificationCode' => $verificationcode,
			'Verified'  => false,
			'DateCreated' => date('Y-m-j H:i:s'),
		);

		return $this->db->insert('users', $data);

	}

	/**
	 * resolve_user_login function.
	 *
	 * @access public
	 * @param mixed $username
	 * @param mixed $password
	 * @return bool true on success, false on failure
	 */
	public function resolve_user_login($idnumber, $password) {

		$this->db->select('Password');
		$this->db->from('users');
		$this->db->where('IDNumber', $idnumber);
		//$this->db->where('Verified', true);
		$hash = $this->db->get()->row('Password');

		return $this->verify_password_hash($password, $hash);

	}


	/**
	 * get_user function.
	 *
	 * @access public
	 * @param mixed $user_id
	 * @return object the user object
	 */
	public function get_user($idnumber) {

		$this->db->from('users');
		$this->db->where('IDNumber', $idnumber);
		return $this->db->get()->row();

	}

	/**
	 * hash_password function.
	 *
	 * @access private
	 * @param mixed $password
	 * @return string|bool could be a string on success, or bool false on failure
	 */
	private function hash_password($password) {

		return password_hash($password, PASSWORD_BCRYPT);

	}

	/**
	 * verify_password_hash function.
	 *
	 * @access private
	 * @param mixed $password
	 * @param mixed $hash
	 * @return bool
	 */
	private function verify_password_hash($password, $hash) {

		return password_verify($password, $hash);

	}

	/**
	 * generate_verification_code function.
	 *
	 * @access public
	 * @return string
	 */
	public function generate_verification_code() {
		$characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
		$random_string_length = 10;
		$string = '';
	 	$max = strlen($characters) - 1;
	  for ($i = 0; $i < $random_string_length; $i++) {
	      $string .= $characters[mt_rand(0, $max)];
	 	}
		return $string;
	}

	/**
	 * verify_email function.
	 *
	 * @access public
	 * @param mixed $verificationCode
	 * @return bool
	 */
  public function verify_email($verificationCode){
      $data = array('Verified' => true);
      $this->db->where('VerificationCode',$verificationCode);
      return $this->db->update('users', $data);
    }

}
