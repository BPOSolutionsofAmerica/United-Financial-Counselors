<?php 


/**
* 
*/
class User_m extends CI_Model
{
	


	public function add_newsletter($data)
	{
		$data  = array(
			'full_name' => $data['subscribe_name'],
			'email' => $data['subscribe_email'],
			'ip' => $data['ip'],
			'date' => $data['date']
			 );
 		//$data  = $this->db->set($data)->get_compiled_insert('mytable');
		if($this->db->insert('newsletter', $data))
		{
			echo "success";
		}
		else
		{
			return false;
		}
		

	}

	public function add_contact($data)
	{
		$data  = array(
			'first_name' => $data['first_name'],
			'last_name' => $data['last_name'],
			'phone' => $data['phone'],
			'email' => $data['email'],
			'meeting_purpose' => $data['meeting_purpose'],
			'question_comments' => $data['message'],
			'user_ip' => $data['user_ip'],
			'createdon' => $data['date']
			 );

		//print_r($data);
		//exit();
 		//$data  = $this->db->set($data)->get_compiled_insert('mytable');
		if($this->db->insert('contactus', $data))
		{
			echo "success";
		}
		else
		{
			return false;
		}
		

	}

	public function sendemail(array $mail_data)
    {
    	
    	$this->load->library('email');

        $from_email = 'info@unitedcounselors.org'; //change this to yours
        $to = $mail_data['to'];
        $subject = $mail_data['subject'];
        $message = $mail_data['message'];
        
     
        
        //configure email settings
        $config['protocol'] = 'mail';
        $config['smtp_crypto']= 'tls'; 
        $config['smtp_host'] = 'smtp.gmail.com'; //smtp host name
        //$config['mailpath'] = '/usr/sbin/sendmail';
        $config['smtp_port'] = '587'; //smtp port number
        $config['smtp_user'] = 'webmaster@unitedcounselors.org';
        $config['smtp_pass'] = 'United007@'; //$from_email password
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['newline'] = "\r\n"; //use double quotes
        $this->email->initialize($config);
        
        //send mail
        $this->email->from($from_email, 'United Financial Counselors - Email Server');
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->set_newline("\r\n");
        return $this->email->send();
    }
}














 ?>