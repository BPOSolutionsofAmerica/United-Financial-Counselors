<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
        parent::__construct();
       
		//$this->load->model('Public_m','public');
		$this->load->helper('form');
		$this->load->model('user_m','userm');
        $this->load->library('encrypt');
        $this->load->library('form_validation');
         

    }


	public function index()
	{
		//echo "Testing public";
		$this->load->view('public/index');
	}



	public function about()
	{
		//echo "Testing public";
		$this->load->view('public/about-us');
	}
	public function contact()
	{

		if($this->form_validation->run('contactus') == True)
		{
			//$this->load->view('public/contact');
			$post = $this->input->post();
			$allservices = implode(',', $post['services']);
			$post['services'] = $allservices;
			return $this->_falshAndRedirect(
                    $this->public->save_contact($post),
                    "Your Query Has Been Sent Successfully.",
                    "Something Went Wrong Please try later.",
                    'contact'
                    );
			
			// echo "<pre>";
			
			// print_r($post);
			// exit();
		}
		else
		{
			$this->load->view('public/contact-us');
		}

		//$this->load->view('public/contact');
		//echo "Testing public";
		
	}
		public function bookappoitment()
	{
		$post = $this->input->post();
		print_r($post);

		if($this->form_validation->run('appointmentform') == True)
		{
			//$this->load->view('public/contact');
			$post = $this->input->post();
			$allservices = implode(',', $post['services']);
			$post['services'] = $allservices;
			return $this->_falshAndRedirect(
                    $this->public->save_appoint($post),
                    "Your Query Has Been Sent Successfully.",
                    "Something Went Wrong Please try later.",
                    'contact'
                    );
			
			// echo "<pre>";
			
			// print_r($post);
			// exit();
		}
		else
		{
			$this->load->view('public/contact-us');
		}

		
		
	}
	public function video_library()
	{
		//echo "Testing public";
		$this->load->view('public/video-library');
	}
	public function testimonials()
	{
		//echo "Testing public";
		$this->load->view('public/testimonials');
	}

	public function partners()
	{
		//echo "Testing public";
		$this->load->view('public/our-partner');
	}
	public function events()
	{
		//echo "Testing public";
		$this->load->view('public/events');
	}

	public function appointment()
	{
		// $post = $this->input->post();
		// print_r($post);

		// if($this->form_validation->run('appointmentform') == True)
		// {
			//$this->load->view('public/contact');
		$post = $this->input->post();
			if(!empty($post))
			{		
			//$allservices = implode(',', $post['services']);
			//$post['services'] = $allservices;
			return $this->_falshAndRedirect(
                    //$this->public->save_appoint($post),
					true,
                    "Your Query Has Been Sent Successfully.",
                    "Something Went Wrong Please try later.",
                    'appointment'
                    );
			
			// echo "<pre>";
			
			// print_r($post);
			// exit();
		}
		else
		{
			$this->load->view('public/appointment');
		}
	}

	public function first_time_home_buyers()
	{
		//echo "Testing public";
		$this->load->view('public/first-time-home-buyers');
	}

	public function do_it_your_self_credit()
	{
		//echo "Testing public";
		$this->load->view('public/do-it-yourself-credit-card-repair');
	}

	public function credit_secured_cards()
	{
		//echo "Testing public";
		$this->load->view('public/build-your-secured-credit-cards');
	}

		public function debt_free()
	{
		//echo "Testing public";
		$this->load->view('public/debt-free');
	}

		public function mortgage_assistance()
	{
		//echo "Testing public";
		$this->load->view('public/mortgage-assistance');
	}

		public function mortgage_programs()
	{
		//echo "Testing public";
		$this->load->view('public/mortgage-programs');
	}

		public function rental_kharma()
	{
		//echo "Testing public";
		$this->load->view('public/rental-kharma');
	}
		public function seminars()
	{
		//echo "Testing public";
		$this->load->view('public/seminars');
	}
		public function webinars()
	{
		//echo "Testing public";
		$this->load->view('public/webinars');
	}
		public function education()
	{
		//echo "Testing public";
		$this->load->view('public/education');
	}

	public function savenewsletter()
	{

		if (isset($_POST)) {
			$post = $_POST;
			$post['ip'] = $this->input->ip_address();
			$post['date'] = date('Y-m-d H:i:s');

		$this->userm->add_newsletter($post);
		$maildata = array(
			'subject' => 'Thankyou for subscribing - United Financial Counselors',
			'to' => $post['subscribe_email'],
			'message' => 'Dear '.$post["subscribe_name"].'<br><br>Your subscribing Request has been received. we will get back to you shortly. <br><br> Thankyou'

		 );

		$this->userm->sendemail($maildata);
		
		
		}
		
		//echo 'success';
		//echo "Testing public";
		//$this->load->view('public/education');
	}

public function savecontactus()
	{
		$post = $_POST;

		$post['user_ip'] = $this->input->ip_address();
		$post['date'] = date('Y-m-d H:i:s');
		$this->userm->add_contact($post);

		$maildata = array(
			'subject' => 'Thankyou for contacting us - United Financial Counselors',
			'to' => $post['email'],
			'message' => 'Dear '.$post["first_name"].' '.$post["last_name"] .'<br><br>Your Query has been received. we will get back to you shortly. <br><br> Thankyou'

		 );

		$this->userm->sendemail($maildata);
		//echo 'success';

		// if (isset($_POST)) {
		// 	$post = $_POST;
		// 	$post['ip'] = $this->input->ip_address();
		// 	$post['date'] = date('Y-m-d H:i:s');
		// 	print_r($post);
		// 	exit();
		//$this->userm->add_newsletter($post);
		
		
		//}
		
		//echo 'success';
		//echo "Testing public";
		//$this->load->view('public/education');
	}

	public function savepoll()
	{

		//$post = $_POST;
		echo "Your Query has been Submitted Successfully!";
		//print_r($post);
		exit();

		if (isset($_POST)) {
			$post = $_POST;
			$post['ip'] = $this->input->ip_address();
			$post['date'] = date('Y-m-d H:i:s');

		$this->userm->add_newsletter($post);
		$maildata = array(
			'subject' => 'Thankyou for participate in poll - United Financial Counselors',
			'to' => $post['subscribe_email'],
			'message' => 'Dear '.$post["fname"]." ".$post["lname"].'<br><br>Your subscribing Request has been received. we will get back to you shortly. <br><br> Thankyou'

		 );

		$this->userm->sendemail($maildata);
		
		
		}
		
		//echo 'success';
		//echo "Testing public";
		//$this->load->view('public/education');
	}

	public function testmail()
	{
		$this->userm->sendemail();
	}



	private function _falshAndRedirect( $successful, $successMessage, $failureMessage,$successpage )
    {
        if( $successful ) {
            $this->session->set_flashdata('feedback',$successMessage);
            $this->session->set_flashdata('feedback_class', 'alert-success');
            $this->session->set_flashdata('feedback_icon', 'glyphicon glyphicon-ok-sign');
        } else {
            $this->session->set_flashdata('feedback', $failureMessage);
            $this->session->set_flashdata('feedback_class', 'alert-danger');
            $this->session->set_flashdata('feedback_icon', 'glyphicon glyphicon-exclamation-sign');
        }
        return redirect($successpage);
    }

  


}
