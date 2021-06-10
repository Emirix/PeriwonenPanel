<?php


class Admin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
		$this->load->model("dbx");


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
		$this->load->view('Admin/reseller-hesap',[
			"magazalar" => $this->db->get("sm_hesap")->result_array()
		]);
	}
    public function createstaff()
	{
		$this->load->view('Admin/staff-hesap');
	}
    
    public function createmanager()
	{
		$this->load->view('Admin/shopmanager-hesap');
	}

	public function allaccount()
	{	$reseller_hesaplar = $this->dbx->tumHesaplarReseller();
		$this->load->view('Admin/tum-hesaplar',[
			"res" => $reseller_hesaplar,
			"sm"=> $this->db->get("sm_hesap")->result_array()
		]);
	}

	public function ioproducts()
	{
		$this->load->view('Admin/islemdeki-siparisler');
	}

	public function orderdetail()
	{
		$this->load->view('Admin/siparis-detay');
	}


	public function siparisfatura()
	{
		$this->load->view('Admin/siparis-fatura');
	}

	public function tumsiparisler()
	{
		$this->load->view('Admin/tum-siparisler');
	}

	public function urunduzenle()
	{
		$this->load->view('Admin/urun-duzenle');
	}
	public function addproduct()
	{
		$this->load->view('Admin/urun-ekle');
	}

	public function alltickets()
	{
		$this->load->view('Admin/tum-talepler');
	}

	public function productlist()
	{
		$this->load->view('Admin/urun-liste');
	}

	public function viewticket()
	{
		$this->load->view('Admin/viewticket');
	}

    
}
