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

    /************/

    function updateaccount(){
        if(isset($_FILES["userfile"])){
            $config['upload_path'] = "./assets/pp/";
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 5000;
            $config['max_width'] = 3000;
            $config['max_height']  = 3000;
            $config['file_name'] = rand(0,15000)."_PROFILE_FOTOSU_".rand(0,15000)."_";
            $resimData = [];

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('userfile')) {
                $error = array('error' => $this->upload->display_errors());
    
                print_r($error);
                $resimData = ["upload_data"=>["file_name"=>"default.jpg"]];

    
            } else {
                $data = array('upload_data' => $this->upload->data());
    
                $resimData = $data;
            }
            

            $this->db->set([
                "ad_soyad"=>$_POST["val-adsoyad"],
                "magaza_adi"=>$_POST["val-magaza"],
                "telefon1"=>$_POST["val-phone"],
                "telefon2"=>$_POST["val-phone2"],
                "website"=>$_POST["val-website"],
                "kvk"=>$_POST["val-kvk"],
                "para_limit"=>$_POST["val-currency"],
                "adres"=>$_POST["val-magaza-adres"],
                "eposta"=>$_POST["val-email"],
                "sifre"=>$_POST["val-password"],
                "foto"=>$resimData["upload_data"]["file_name"]
            ]);
            $this->db->where('id', $_POST["id"]);
            $this->db->update('sm_hesap');

        }
        else{
            $this->db->set([
                "ad_soyad"=>$_POST["val-adsoyad"],
                "magaza_adi"=>$_POST["val-magaza"],
                "telefon1"=>$_POST["val-phone"],
                "telefon2"=>$_POST["val-phone2"],
                "website"=>$_POST["val-website"],
                "kvk"=>$_POST["val-kvk"],
                "para_limit"=>$_POST["val-currency"],
                "adres"=>$_POST["val-magaza-adres"],
                "eposta"=>$_POST["val-email"],
                "sifre"=>$_POST["val-password"]
            ]);

            $this->db->where('id', $_POST["id"]);
            $this->db->update('sm_hesap');
            echo "Resim güncellenmeyecek";
        }
        





      

        echo "Shop Manager Hesabı Güncellendi. Yönlendiriliyorsunuz";
        header("Refresh:1; url=" . base_url("admin/createaccount"), true, 303);
 
    }

    function addaccount(){
        
        $config['upload_path'] = "./assets/pp/";
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 5000;
        $config['max_width'] = 3000;
        $config['max_height']  = 3000;
        $config['file_name'] = rand(0,1500)."_SHOPMANAGER_FOTOSU_".rand(0,1500)."_";
        $resimData = [];
        $this->load->library('upload', $config);

        

       

        if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
            $resimData = ["upload_data"=>["file_name"=>"default.jpg"]];


        } else {
            $data = array('upload_data' => $this->upload->data());

            $resimData = $data;
        }

   


        $this->db->insert("sm_hesap",[
            "ad_soyad"=>$_POST["val-adsoyad"],
            "magaza_adi"=>$_POST["val-magaza"],
            "telefon1"=>$_POST["val-phone"],
            "telefon2"=>$_POST["val-phone2"],
            "website"=>$_POST["val-website"],
            "kvk"=>$_POST["val-kvk"],
            "para_limit"=>$_POST["val-currency"],
            "foto"=>$resimData["upload_data"]["file_name"],
            "adres"=>$_POST["val-magaza-adres"],
            "eposta"=>$_POST["val-email"],
            "sifre"=>$_POST["val-password"],
        ]);

        echo "Shop Manager Hesabı Eklendi. Yönlendiriliyorsunuz";
        header("Refresh:1; url=" . base_url("admin/createaccount"), true, 303);

    }
}
