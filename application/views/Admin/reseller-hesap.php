<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>panel</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php  echo base_url("assets/admin/images/panel.ico")?>">
    <link href="<?php  echo base_url("assets/admin/vendor/dropzone/dist/dropzone.css") ?> " rel="stylesheet">
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
							Hesap (Reseller)
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
							<span class="nav-text">Site Adı</span>
						</a>
						<ul aria-expanded="false">
                            <li><a href="<?php echo base_url("admin") ?>">Anasayfa</a></li>
                        </ul>
					</li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-user"></i>
							<span class="nav-text">Hesap Yönetimi</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="<?php echo base_url("admin/createaccount") ?>">Hesap Oluştur</a></li>
							<li><a href="<?php echo base_url("admin/allaccount") ?>">Tüm Hesaplar</a></li>
                            <li><a href="<?php echo base_url("admin/createreseller") ?>" style="color: green;">Reseller Oluştur/Düzenle</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-presentation"></i>
							<span class="nav-text">Ürün Yönetimi</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="urun-ekle.php">Ürün Ekle</a></li>
							<li><a href="urun-liste.php">Eklenen Ürünler</a></li>
                        </ul>
                    </li>
					<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-price-tag"></i>
							<span class="nav-text">Sipariş Takip</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="islemdeki-siparisler.php">İşlemdeki Siparişler</a></li>
							<li><a href="tum-siparisler.php">Tüm Siparişler</a></li>
                        </ul>
                    </li>
					<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-notepad"></i>
							<span class="nav-text">Destek</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="tum-talepler.php">Tüm Talepler</a></li>
                        </ul>
                    </li>
                </ul>
				<div class="copyright text-center">
					<p><strong>Periwonen Yönetim Paneli</strong> © 2021 All Rights Reserved</p>
					<p>Made with <span class="heart"></span> by Wrix</p>
				</div>
			</div>
        </div>
		<div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Hesap Yönetimi</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Hesap Oluştur/Düzenle (Reseller)</a></li>
					</ol>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Kullanıcı Bilgileri</h4>
                            </div>
                            <div class="card-body">
                                <form class="form-valide" action="#" method="post">
                                    <div class="basic-form">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Ad Soyad <span class="text-danger">*</span></label>
                                                <div><input type="text" class="form-control" id="val-adsoyad" name="val-adsoyad" placeholder="Ad Soyad"></div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label  for="val-phone">Telefon 1 <span class="text-danger">*</span></label>
                                                <div><input type="text" class="form-control" id="val-phone" name="val-phone" placeholder="000-000-0000"></div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Telefon 2</label>
                                                <input type="tel" class="form-control" placeholder="0000000">
                                            </div>
                                            <div class="form-group col-md-6 userpp">
                                                <label>Fotoğraf seç</label>
                                                <input type="file" class="fotografsec form-control">
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
                                                <input type="text" class="form-control" id="val-email" name="val-email" placeholder="Geçerli bir e-posta adresi yazınız..">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="text-label">Password <span class="text-danger">*</span></label>
                                            <div class="input-group transparent-append">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                                </div>
                                                <input type="password" class="form-control" id="dz-password" name="val-password" placeholder="Korunaklı bir şifre giriniz.">
                                                <div class="input-group-append show-pass ">
                                                    <span class="input-group-text "> 
                                                        <i class="fa fa-eye-slash"></i>
                                                        <i class="fa fa-eye"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input id="checkbox1" class="form-check-input" type="checkbox">
                                                <label for="checkbox1" class="form-check-label">Kontrol et</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn mr-2 btn-primary">Tamamla</button>
                                        <button type="submit" class="btn btn-light">İptal</button>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Mağaza Erişimi</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <form>
                                            <table class="table table-responsive-md">
                                                <thead>
                                                    <tr>
                                                        <th class="width50">
                                                            <div class="custom-control custom-checkbox checkbox-primary check-lg mr-3">
                                                                <input type="checkbox" class="custom-control-input" id="checkAll" required="">
                                                                <label class="custom-control-label" for="checkAll"></label>
                                                            </div>
                                                        </th>
                                                        <th>ID</th>
                                                        <th>Mağaza Sahibi</th>
                                                        <th>Mağaza Adı</th>
                                                        <th>E-Posta</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox checkbox-primary check-lg mr-3">
                                                                <input type="checkbox" class="custom-control-input" id="customCheckBox2" required="">
                                                                <label class="custom-control-label" for="customCheckBox2"></label>
                                                            </div>
                                                        </td>
                                                        <td><strong>000</strong></td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <img src="images/avatar/1.jpg" class="rounded-lg mr-2" width="24" alt=""/> 
                                                                <span class="w-space-no">Ad Soyad</span>
                                                            </div>
                                                        </td>
                                                        <td>Mağaza Adı</td>
                                                        <td>example@example.com</td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
				<p><strong>Periwonen Yönetim Paneli</strong> © 2021 All Rights Reserved</p>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url("assets/admin/vendor/global/global.min.js") ?> "></script>
	<script src="<?php echo base_url("assets/admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js") ?> "></script>
    <script src="<?php echo base_url("assets/admin/js/custom.min.js") ?> "></script>
	<script src="<?php echo base_url("assets/admin/js/deznav-init.js") ?> "></script>
    <script src="<?php echo base_url("assets/admin/vendor/dropzone/dist/dropzone.js") ?> "></script>
    <script src="<?php echo base_url("assets/admin/vendor/jquery-validation/jquery.validate.min.js") ?> "></script>
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