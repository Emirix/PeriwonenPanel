<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>panel</title>
    <!-- Favicon icon -->
	<link href="<?php  echo base_url("assets/admin/vendor/lightgallery/css/lightgallery.min.css") ?> " rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php  echo base_url("assets/admin/images/panel.ico")?>">
	<link href="<?php  echo base_url("assets/admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css") ?> " rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php  echo base_url("assets/admin/vendor/star-rating/star-rating-svg.css") ?> ">
	<link rel="stylesheet" href="<?php  echo base_url("assets/admin/vendor/select2/css/select2.min.css") ?> ">
    <link href="<?php  echo base_url("assets/admin/css/style.css") ?> " rel="stylesheet">
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
							Sipari?? Fatura
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
							<li><a href="hesap-olustur.php">Hesap Olu??tur</a></li>
							<li><a href="tum-hesaplar.php">T??m Hesaplar</a></li>
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
                            <li><a href="siparis-fatura.php">Sipari?? Fatura</a></li>
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
            <div class="row">
                    <div class="col-lg-12">

                        <div class="card">
                            <div class="card-header"> 
                                Fatura 
                                <strong>Ma??aza Ad??</strong> 
                                <span class="float-right">
                                    <strong>Durum:</strong> %%
                                </span> 
                            </div>
                            <div class="card-body">
                                <div class="row mb-5">
                                    <div class="mt-4 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                        <h6>G??nderen:</h6>
                                        <div> <strong class="cblack">Baran Firma Ad??</strong> </div>
                                        <strong>adres_adres_adres_adres adres_adres_adres_adres</strong>
                                        <div>Email: baran@hotmail.com</div>
                                        <div>Telefon: 00000000</div>
                                    </div>
                                    <div class="mt-4 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                        <h6>Kime:</h6>
                                        <div> <strong class="cblack">Al??c?? Ad?? ve Soyad??</strong> </div>
                                        <strong>adres_adres_adres_adres adres_adres_adres_adres</strong>
                                        <div>Email: baran@hotmail.com</div>
                                        <div>Telefon: 00000000</div>
                                    </div>
                                    <div class="mt-3 col-xl-6 col-lg-6 col-md-12 col-sm-12 d-flex justify-content-lg-end justify-content-md-center justify-content-xs-start">
                                        <div class="row align-items-center">
											<div class="col-sm-9"> 
												<div class="brand-logo mb-3">
                                                <div class="faturalogo"><i class="flaticon-381-file-1" style="font-weight: 500;"></i> Factuur</div>
												</div>
                                                <span>Toplam tutar: <b class="d-block float-right">40.000???</b></span><br>
                                                <span>Toplam bor??: <b class="d-block float-right">30.000???</b></span><br>
                                                <span>??denen tutar: <b class="d-block float-right">5.000???</b></span>
                                                <br>
                                                <small class="text-muted">Bu bilgiler sadece bu faturada yer alan ??r??n i??in ge??erlidir!</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>??r??n Ad??</th>
                                                <th>??r??n A????klamas??</th>
                                                <th class="center">Adet</th>
                                                <th class="right">Toplam</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#1</td>
                                                <td class="left strong">??r??n??n Ad??</td>
                                                <td class="left">??r??n??n A??klamas??</td>
                                                <td class="center">1</td>
                                                <td class="right">999,00???</td>
                                            </tr>
                                            <tr>
                                                <td>#2</td>
                                                <td class="left">M????teri Hizmetleri</td>
                                                <td class="left">Kurulum ve ??zelle??tirme</td>
                                                <td class="center">1</td>
                                                <td class="right">Free</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-sm-5"> </div>
                                    <div class="col-lg-4 col-sm-5 ml-auto">
                                        <table class="table table-clear">
                                            <tbody>
                                                <tr>
                                                    <td class="left"><strong>??r??n tutar??</strong></td>
                                                    <td class="right">999,00???</td>
                                                </tr>
                                                <tr>
                                                    <td class="left"><strong>Hizmet bedeli</strong></td>
                                                    <td class="right">Free</td>
                                                </tr>
                                                <tr>
                                                    <td class="left"><strong class="cblack">Toplam</strong></td>
                                                    <td class="right"><strong class="cblack">999,00???</strong>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">??denen Bor?? Detaylar??</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Ad Soyad</th>
                                                <th>Durum</th>
                                                <th>Tarih</th>
                                                <th>Tutar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>1</th>
                                                <td>Ma??aza Sahibinin Ad??</td>
                                                <td><span class="badge badge-success">??deme Yap??ld??</span>
                                                </td>
                                                <td>00/00/0000</td>
                                                <td class="color-primary">21???</td>
                                            </tr>
                                            <tr>
                                                <th>2</th>
                                                <td>Ma??aza Sahibinin Ad??</td>
                                                <td><span class="badge badge-success">??deme Yap??ld??</span>
                                                </td>
                                                <td>00/00/0000</td>
                                                <td class="color-success">55???</td>
                                            </tr>
                                            <tr>
                                                <th>3</th>
                                                <td>Ma??aza Sahibinin Ad??</td>
                                                <td><span class="badge badge-success">??deme Yap??ld??</span>
                                                </td>
                                                <td>00/00/0000</td>
                                                <td class="color-danger">30???</td>
                                            </tr>
                                        </tbody>
                                    </table>
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
    <script src="<?php echo base_url("assets/admin/vendor/highlightjs/highlight.pack.min.js") ?> "></script>
	<script src="<?php echo base_url("assets/admin/vendor/star-rating/jquery.star-rating-svg.js") ?> "></script>
    <script src="<?php echo base_url("assets/admin/vendor/lightgallery/js/lightgallery-all.min.js") ?> "></script>
	<script src="<?php echo base_url("assets/admin/vendor/select2/js/select2.full.min.js") ?> "></script>
    <script src="<?php echo base_url("assets/admin/js/plugins-init/select2-init.js") ?> "></script>
	

	<script>
		$('#lightgallery').lightGallery({
			loop:true,
			thumbnail:true,
			exThumbImage: 'data-exthumbimage'
		});
	</script>

</body>


</html>