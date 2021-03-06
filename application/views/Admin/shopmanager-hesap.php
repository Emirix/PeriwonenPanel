<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>panel</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php  echo base_url("assets/admin/images/panel.ico")?>">
	<link href="<?php  echo base_url("assets/admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css") ?> " rel="stylesheet">
    <link href="<?php  echo base_url("assets/admin/css/style.css") ?> " rel="stylesheet">
    <link href="<?php  echo base_url("assets/admin/css/fotografsec.scss")?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>

<body>
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="nav-header">
			<a href="index.php" class="w-100 text-center brand-logo">logo</a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
		</div>
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
							Hesap (Shop Manager)
                            </div>
                        </div>
						<!-- Bildirim Kutusu -->
						<?php require('navbar.php'); ?>
						<!-- -->
                    </div>
                </nav>
            </div>
        </div>

        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-home-2"></i>
							<span class="nav-text">Site Ad??</span>
						</a>
						<ul aria-expanded="false">
                            <li><a href="index.php">Anasayfa</a></li>
                        </ul>
					</li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-user"></i>
							<span class="nav-text">Hesap Y??netimi</span>
						</a>
                        <ul aria-expanded="false">
                        <li><a href="<?php echo base_url("admin/createaccount") ?>">Hesap Olu??tur</a></li>
							<li><a href="<?php echo base_url("admin/allaccount") ?>">T??m Hesaplar</a></li>
                     <li><a href="<?php echo base_url("admin/createmanager") ?>" style="color: green;">Shop Manager Olu??tur/D??zenle</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-presentation"></i>
							<span class="nav-text">??r??n Y??netimi</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="urun-ekle.php">??r??n Ekle</a></li>
							<li><a href="urun-liste.php">Eklenen ??r??nler</a></li>
                        </ul>
                    </li>
					<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-price-tag"></i>
							<span class="nav-text">Sipari?? Takip</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="islemdeki-siparisler.php">????lemdeki Sipari??ler</a></li>
							<li><a href="tum-siparisler.php">T??m Sipari??ler</a></li>
                        </ul>
                    </li>
					<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-notepad"></i>
							<span class="nav-text">Destek</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="tum-talepler.php">T??m Talepler</a></li>
                        </ul>
                    </li>
                </ul>
				<div class="copyright text-center">
					<p><strong>Periwonen Y??netim Paneli</strong> ?? 2021 All Rights Reserved</p>
					<p>Made with <span class="heart"></span> by Wrix</p>
				</div>
			</div>
        </div>
		<div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Hesap Y??netimi</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Hesap Olu??tur/D??zenle (Shop Manager)</a></li>
					</ol>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Kullan??c?? Bilgileri</h4>
                            </div>
                            <div class="card-body">
                                <form  enctype="multipart/form-data" class="form-valide" action="<?php 
                                if(isset($_GET["edit"])){
                                    echo base_url("shopmanager/updateaccount");
                                }else{
                                    echo base_url("shopmanager/addaccount");
                                }
                                ?>" method="post">
                                    <?php if(isset($_GET["edit"])) { ?> 
                                        <h4 class="text-info">??UANDA ED??T MODUNDASINIZ. ID: <?php echo $_GET["id"] ?></h4>
                                        <input type="hidden" value="<?php echo $_GET["id"] ?>" name="id">
                                    <?php } ?>
                                    <div class="basic-form">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Ad Soyad <span class="text-danger">*</span></label>
                                                <div><input value="<?php if(isset($_GET["edit"])) { echo $_GET["ad_soyad"]; }?>" type="text" class="form-control" id="val-adsoyad" name="val-adsoyad" placeholder="Ad Soyad"></div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Ma??aza Ad?? <span class="text-danger">*</span></label>
                                                <div><input value="<?php if(isset($_GET["edit"])) { echo $_GET["magaza_adi"] ; }?>" type="text" class="form-control" id="val-magaza" name="val-magaza" placeholder="Ma??aza Ad??"></div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label  for="val-phone">Telefon 1 <span class="text-danger">*</span></label>
                                                <div><input value="<?php  if(isset($_GET["edit"])) { echo $_GET["telefon1"] ; }?>" type="text" class="form-control" id="val-phone" name="val-phone" placeholder="000-000-0000"></div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Telefon 2</label>
                                                <input value="<?php if(isset($_GET["edit"])) { echo $_GET["telefon2"] ; }?>" type="tel" class="form-control" placeholder="0000000" name="val-phone2">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="val-website">Website <span class="text-danger">*</span></label>
                                                <div><input value="<?php if(isset($_GET["edit"])) { echo $_GET["website"] ; }?>" type="text" class="form-control" id="val-website" name="val-website" placeholder="http://example.com"></div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="val-website">KvK <span class="text-danger">*</span></label>
                                                <div><input value="<?php if(isset($_GET["edit"])) { echo $_GET["kvk"] ; }?>" type="text" class="form-control" id="val-kvk" name="val-kvk" placeholder="KvK Numaras??"></div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="val-website" for="val-currency">Al????veri?? Limiti <span class="text-danger">*</span></label>
                                                <div><input value="<?php if(isset($_GET["edit"])) { echo $_GET["para_limit"] ; }?>" type="text" class="form-control" id="val-currency" name="val-currency" placeholder="???50.000"></div>
                                            </div>
                                            <div class="form-group col-md-6 userpp">
                                                <label>Foto??raf se??</label>
                                                <input type="file" name="userfile" id="userfile" class="fotografsec form-control">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="val-website" for="val-magaza-adres">Ma??aza Adresi <span class="text-danger">*</span></label>
                                                <div><textarea value="<?php if(isset($_GET["edit"])) { echo $_GET["adres"] ; }?>" class="form-control" id="val-magaza-adres" name="val-magaza-adres" rows="5" placeholder="Ma??azan??n adresi.."></textarea></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="basic-form">
                                        <div class="form-group">
                                            <label class="text-label" for="val-email">E-Posta <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                </div>
                                                <input value="<?php if(isset($_GET["edit"])) { echo $_GET["eposta"] ; }?>" type="text" class="form-control" id="val-email" name="val-email" placeholder="Ge??erli bir e-posta adresi yaz??n??z..">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="text-label">Password <span class="text-danger">*</span></label>
                                            <div class="input-group transparent-append">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                                </div>
                                                <input value="<?php if(isset($_GET["edit"])) { echo $_GET["sifre"] ; }?>" type="password" class="form-control" id="dz-password" name="val-password" placeholder="Korunakl?? bir ??ifre giriniz.">
                                                <div class="input-group-append show-pass ">
                                                    <span class="input-group-text "> 
                                                        <i class="fa fa-eye-slash"></i>
                                                        <i class="fa fa-eye"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn mr-2 btn-primary">Tamamla</button>
                                        <button  class="btn btn-light">??ptal</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
        </div>
    </div>

    <div class="footer">
        <div class="copyright text-center">
			<p><strong>Periwonen Y??netim Paneli</strong> ?? 2021 All Rights Reserved</p>
        </div>
    </div>
    </div>
    <script src="<?php echo base_url("assets/admin/vendor/global/global.min.js") ?> "></script>
	<script src="<?php echo base_url("assets/admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js") ?> "></script>
    <script src="<?php echo base_url("assets/admin/js/custom.min.js") ?> "></script>
	<script src="<?php echo base_url("assets/admin/js/deznav-init.js") ?> "></script>
    <script src="<?php echo base_url("assets/admin/vendor/dropzone/dist/dropzone.js") ?> "></script>
    <!-- <script src="<?php // echo base_url("assets/admin/vendor/jquery-validation/jquery.validate.min.js") ?> "></script> -->
    <script src="<?php echo base_url("assets/admin/js/plugins-init/jquery.validate-init.js") ?> "></script>

	<script>
	jQuery(document).ready(function(){
		
		jQuery('.show-pass').on('click',function(){
			jQuery(this).toggleClass('active');
			if(jQuery('#dz-password').attr('type') == 'password'){
				jQuery('#dz-password').attr('type','text');
			}else if(jQuery('#dz-password').attr('type') == 'text'){
				jQuery('#dz-password').attr('type','password');
			}
		});
		
		

	});
	</script>	

</body>
</html>