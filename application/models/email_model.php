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
 public function send_email_verification($email,$verificationText, $firstname){

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
  $this->email->from('noreply.usjr.online.enrollment@gmail.com', "USJ-R Online Enrollment");
  $this->email->to($email);
  $this->email->subject("Email Verification");

  $data = array(
             'userName'         => $firstname,
             'verificationText' => $verificationText,
                 );
  $body = $this->load->view('user/email/email_template', $data, TRUE);
  $this->email->message($body);

  return $this->email->send();
 }
}
?>
