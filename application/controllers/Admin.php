<?php


class Admin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

    }

	public function index()
	{
		$this->load->view('Admin/index');
	}

    public function createaccount()
	{
		$this->load->view('Admin/hesap-olustur');
	}

    public function createreseller()
	{
		$this->load->view('Admin/reseller-hesap');
	}
    public function createstaff()
	{
		$this->load->view('Admin/staff-hesap');
	}
    
    public function createmanager()
	{
		$this->load->view('Admin/shopmanager-hesap');
	}

    
}
