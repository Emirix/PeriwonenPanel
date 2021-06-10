<?php


class Staff extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

    }

	public function index()
	{
		$this->load->view('Staff/islemdeki-siparisler');
	}

    public function orderdetail()
	{
		$this->load->view('Staff/siparis-detay');
	}

    public function allorders()
	{
		$this->load->view('Staff/tum-siparisler');
	}

    public function alltickets()
	{
		$this->load->view('Staff/tum-talepler');
	}

    public function viewticket()
	{
		$this->load->view('Staff/viewticket');
	}


 

    
}
