<?php


class Shopmanager extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

    }

	public function index()
	{
		$this->load->view('ShopManager/index');
	}

    public function newsupport(){
        $this->load->view('ShopManager/talep-olustur');

    }
    public function mysupports(){
        $this->load->view('ShopManager/destek-taleplerim');
    }

    public function orders(){
        $this->load->view('ShopManager/siparislerim');
    }

    public function bill(){
        $this->load->view('ShopManager/siparis-fatura');
    }

    
    public function ticket(){
        $this->load->view('ShopManager/viewticket');
    }

    public function orderdetail(){
        $this->load->view('ShopManager/siparis-detay');
    }

    public function productdetail(){
        $this->load->view('ShopManager/urun-detay');
    }

    public function productlist(){
        $this->load->view('ShopManager/urun-liste');
    }
}
