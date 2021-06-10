<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>panel</title>
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url("assets/admin/images/panel.ico")?>>
	<link rel="stylesheet" href="<?php echo base_url("assets/admin/vendor/select2/css/select2.min.css") ?>">
	<link href="<?php echo base_url("assets/admin/vendor/dropzone/dist/dropzone.css") ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/admin/vendor/jquery-smartwizard/dist/css/smart_wizard.min.css") ?>" rel="stylesheet">
	<link href="<?php echo base_url("assets/admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css") ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/admin/css/style.css") ?>" rel="stylesheet">
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
							Yeni Ürün Ekle
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
                            <li><a href="index.php">Anasayfa</a></li>
                        </ul>
					</li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-user"></i>
							<span class="nav-text">Hesap Yönetimi</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="hesap-olustur.php">Hesap Oluştur</a></li>
							<li><a href="tum-hesaplar.php">Tüm Hesaplar</a></li>
                        </ul>
                    </li>
                    <li class="mm-active"><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-presentation"></i>
							<span class="nav-text">Ürün Yönetimi</span>
						</a>
                        <ul aria-expanded="false">
							<li class="mm-active"><a href="urun-ekle.php" class="mm-active">Ürün Ekle</a></li>
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
						<li class="breadcrumb-item"><a href="javascript:void(0)">Ürün Yönetimi</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Yeni Ürün Ekle</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Yeni Ürün Ekle</h4>
                            </div>
                            <div class="card-body">
								<div id="smartwizard" class="form-wizard order-create">
									<ul class="nav nav-wizard">
										<li><a class="nav-link" href="#urun_GenelBilgi"> 
											<span>1</span> 
										</a></li>
										<li><a class="nav-link" href="#urun_StokDurumu">
											<span>2</span>
										</a></li>
										<li><a class="nav-link" href="#urun_selectKategori">
											<span>3</span>
										</a></li>
										<li><a class="nav-link" href="#urun_Fotograflar">
											<span>4</span>
										</a></li>
									</ul>
									<div class="tab-content urunekletab">
										<div id="urun_GenelBilgi" class="tab-pane" role="tabpanel">
											<div class="row">
												<div class="col-lg-6 mb-2">
													<div class="form-group">
														<label class="text-label">Ürün Adı <span class="text-danger">*</span></label>
														<input type="text" class="form-control" placeholder="Ürün adını yazınız..">
													</div>
												</div>
												<div class="col-lg-6 mb-2">
													<div class="form-group">
														<label class="text-label">Ürün Markası <span class="text-danger">*</span></label>
														<input type="text"  class="form-control" placeholder="Ürün markasını yazınız..">
													</div>
												</div>
												<div class="col-lg-6 mb-2">
													<div class="form-group">
														<label class="text-label">Ürün Kodu <span class="text-danger">*</span></label>
														<input type="number" class="form-control" placeholder="0000">
													</div>
												</div>
												<div class="col-lg-6 mb-2">
													<div class="form-group">
														<label class="text-label">Ürün Etiketleri <span class="text-danger">*</span></label>
														<input type="text" class="form-control" placeholder="#">
													</div>
												</div>
												<div class="col-lg-12 mb-3">
													<div class="form-group">
														<label class="text-label">Ürün Açıklaması <span class="text-danger">*</span></label>
														<textarea type="text" class="height-100 form-control"></textarea>
													</div>
												</div>
											</div>
										</div>
										<div id="urun_StokDurumu" class="tab-pane" role="tabpanel">
											<div class="row">
												<div class="col-lg-12 mb-2">
													<div class="form-group">
														<label class="text-label">Stok Durumu <span class="text-danger">*</span></label>
														<input type="number" class="form-control" placeholder="Stok sınırlıysa lütfen kalan stok sayısını buraya giriniz!" required>
													</div>
													<div class="custom-control custom-checkbox checkbox-primary check-lg mr-3">
														<input type="checkbox" class="custom-control-input" id="checkAll" required="">
														<label class="custom-control-label stokvar" for="checkAll">Stok sorunu yoksa lütfen işaretleyin</label>
													</div>
												</div>
											</div>
										</div>
										<div id="urun_selectKategori" class="tab-pane" role="tabpanel">
											<div class="row">
												<div class="col-sm-4 mb-2">
													<h4>blabla <span class="text-danger">*</span></h4>
												</div>
												<div class="col-8 mb-2">
													<select class="js-example-disabled">
														<option value="AL">blabla</option>
														<option value="WY">blabla</option>
													</select>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-4 mb-2">
													<h4>blabla <span class="text-danger">*</span></h4>
												</div>
												<div class="col-8 mb-2">
													<select class="js-example-disabled">
														<option value="AL">blabla</option>
														<option value="WY">blabla</option>
													</select>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-4 mb-2">
													<h4>blabla <span class="text-danger">*</span></h4>
												</div>
												<div class="col-8 mb-2">
													<select class="js-example-disabled">
														<option value="AL">blabla</option>
														<option value="WY">blabla</option>
													</select>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-4 mb-2">
													<h4>blabla <span class="text-danger">*</span></h4>
												</div>
												<div class="col-8 mb-2">
													<select class="js-example-disabled">
														<option value="AL">blabla</option>
														<option value="WY">blabla</option>
													</select>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-4 mb-2">
													<h4>blabla <span class="text-danger">*</span></h4>
												</div>
												<div class="col-8 mb-2">
													<select class="js-example-disabled">
														<option value="AL">blabla</option>
														<option value="WY">blabla</option>
													</select>
												</div>
											</div>
										</div>
										<div id="urun_Fotograflar" class="tab-pane" role="tabpanel">
											<div class="compose-content">
												<h5 class="mb-3"><i class="fa fa-paperclip"></i> Ürün Fotoğrafları Yükle</h5>
												<p class="urunfoto-uyari">İlk seçilen fotoğraf ürünün kapak fotoğrafıdır. Lütfen ilk seçeceğiniz fotoğrafı kapak fotoğrafı olarak seçiniz.</p>
												<form action="#" class="dropzone">
													<div class="fallback">
														<input name="file" type="file" multiple />
													</div>
												</form>
											</div>
										</div>
									</div>
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
    <script src="<?php echo base_url("assets/admin/vendor/jquery-steps/build/jquery.steps.min.js") ?> "></script>
    <script src="<?php echo base_url("assets/admin/vendor/jquery-validation/jquery.validate.min.js") ?> "></script>
    <script src="<?php echo base_url("assets/admin/js/plugins-init/jquery.validate-init.js") ?> "></script>
	<script src="<?php echo base_url("assets/admin/vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js") ?> "></script>
	<script src="<?php echo base_url("assets/admin/vendor/dropzone/dist/dropzone.js") ?> "></script>
	<script src="<?php echo base_url("assets/admin/vendor/select2/js/select2.full.min.js") ?> "></script>
    <script src="<?php echo base_url("assets/admin/js/plugins-init/select2-init.js") ?> "></script>
	<script>
		$(document).ready(function(){
			$('#smartwizard').smartWizard(); 
		});
	</script>

</body>

</html>