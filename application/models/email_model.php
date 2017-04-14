<?php
class email_model extends CI_Model {

 function EmailModel(){
  parent::Model();
  $this->load->library('email');
 }

 /**
  * send_email_verification function.
  *
  * @access public
  * @param mixed $email
  * @param mixed $verificationText
  * @return bool true on success, false on failure
  */
 public function send_email_verification($email,$verificationText){

  $config = Array(
     'protocol' => 'smtp',
     'smtp_host' => 'ssl://smtp.gmail.com',
     'smtp_port' => 465,
     'smtp_user' => 'noreply.usjr.online.enrollment@gmail.com',
     'smtp_pass' => 'usjradmin12345',
     'mailtype' => 'html',
     'charset' => 'iso-8859-1',
     'wordwrap' => TRUE
  );


  $this->load->library('email', $config);
  $this->email->initialize($config);
  $this->email->set_newline("\r\n");
  $this->email->from('noreply.usjr.online.enrollment@gmail.com', "USJ-R Online Enrollment Admin Team");
  $this->email->to($email);
  $this->email->subject("Email Verification");
  $this->email->message("Dear User,\nPlease click on below URL or paste into your browser to verify your Email Address\n\n http://localhost/Online-Enrollment-USJR/User/confirm_email/".$verificationText."\n"."\n\nThanks\nAdmin Team");

  return $this->email->send();
 }
}
?>
