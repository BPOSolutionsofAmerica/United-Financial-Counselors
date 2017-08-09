<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends MY_Controller {

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
		// $this->load->model('property_m','property');
        $this->load->library('encrypt');
        $this->load->library('form_validation');
         

    }


	public function index()
	{
		//echo "Testing public";
		$this->load->view('public/services');
	}



	

	public function first_time_home_buyers()
	{
		//echo "Testing public";
		$this->load->view('public/first-time-home-buyers');
	}

	public function credit_secured_cards()
	{
		//echo "Testing public";
		$this->load->view('public/do-it-yourself-credit-card-repair');
	}

	public function build_credit()
	{
		//echo "Testing public";
		$this->load->view('public/build-your-secured-credit-cards');
	}

		public function debtfree()
	{
		//echo "Testing public";
		$this->load->view('public/debt-free');
	}

		public function mortgageaid()
	{
		//echo "Testing public";
		$this->load->view('public/mortgage-assistance');
	}

		public function mortgage_rates()
	{
		//echo "Testing public";
		$this->load->view('public/mortgage-program');
	}

		public function rentalcounseling()
	{
		//echo "Testing public";
		$this->load->view('public/rental-kharma');
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
