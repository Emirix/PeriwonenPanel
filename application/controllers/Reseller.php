<?php


class Reseller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("dbx");
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $this->load->view('reseller');
    }

    public function apiupdatereseller()
    {

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
                "ad_soyad" => $_POST["val-adsoyad"],
                "telefon1" => $_POST["val-phone"],
                "telefon2" => $_POST["val-phone2"],
                "eposta" => $_POST["val-email"],
                "sifre" => $_POST["val-password"],
                "fotograf"=>$resimData["upload_data"]["file_name"]
            ]);
            $this->db->where('id', $_POST["id"]);
            $this->db->update('reseller_hesap');

        }
        else{
            $this->db->set([
                "ad_soyad" => $_POST["val-adsoyad"],
                "telefon1" => $_POST["val-phone"],
                "telefon2" => $_POST["val-phone2"],
                "eposta" => $_POST["val-email"],
                "sifre" => $_POST["val-password"]            ]);
            $this->db->where('id', $_POST["id"]);
            $this->db->update('reseller_hesap');
            echo "Resim güncellenmeyecek";
        }
        





      

        echo "Reseller Hesabı Güncellendi. Yönlendiriliyorsunuz";
        header("Refresh:1; url=" . base_url("admin/createaccount"), true, 303);
    }

    public function apicreatereseller()
    {

        $config['upload_path'] = "./assets/pp/";
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 5000;
        $config['max_width'] = 3000;
        $config['max_height']  = 3000;
        $config['file_name'] = rand(0,1500)."_PROFILE_FOTOSU_".rand(0,1500)."_";
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
    


        $this->dbx->resellerEkle([
            "ad_soyad" => $_POST["val-adsoyad"],
            "telefon1" => $_POST["val-phone"],
            "telefon2" => $_POST["val-phone2"],
            "eposta" => $_POST["val-email"],
            "sifre" => $_POST["val-password"],
            "fotograf"=>$resimData["upload_data"]["file_name"]
            // "erisim" => $_POST[""],
        ]);

        
        echo "Reseller Hesabı Eklendi. Yönlendiriliyorsunuz";
        header("Refresh:1; url=" . base_url("admin/createaccount"), true, 303);
    }


}
