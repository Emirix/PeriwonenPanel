<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>panel</title>
    <!-- Favicon icon -->
	<link href="<?php echo base_url("assets/staff/vendor/lightgallery/css/lightgallery.min.css") ?>" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url("assets/staff/images/panel.ico")?>">
	<link href="<?php echo base_url("assets/staff/vendor/bootstrap-select/dist/css/bootstrap-select.min.css") ?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/staff/vendor/star-rating/star-rating-svg.css") ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/staff/vendor/select2/css/select2.min.css") ?>">
    <link href="<?php echo base_url("assets/staff/css/style.css") ?>" rel="stylesheet">
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
							Sipari?? Detay??
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
							<i class="flaticon-381-price-tag"></i>
							<span class="nav-text">Sipari?? Takip</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="islemdeki-siparisler.php">????lemdeki Sipari??ler</a></li>
							<li><a href="tum-siparisler.php">T??m Sipari??ler</a></li>
                            <li><a href="siparis-detay.php">Sipari?? Detay??</a></li>
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
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-6  col-md-6 col-xxl-5 ">
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade show active" id="first">
                                                <img class="img-fluid" src="images/product/1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-slide-content new-arrival-product mb-4 mb-xl-0">
                                            <!-- Nav tabs -->
											<ul class="nav slide-item-list mt-3" role="tablist" id="lightgallery" >
                                                <a class="detay-lgl mb-2" href="images/tab/1.jpg" data-exthumbimage="images/tab/1.jpg" data-src="images/tab/1.jpg" >
                                                    <img class="img-fluid" src="images/tab/1.jpg" alt="" width="50">
                                                </a>
                                                <a class="detay-lgl mb-2" href="images/tab/2.jpg" data-exthumbimage="images/tab/2.jpg" data-src="images/tab/2.jpg" >
                                                    <img class="img-fluid" src="images/tab/2.jpg" alt="" width="50">
                                                </a>
                                                <a class="detay-lgl mb-2" href="images/tab/3.jpg" data-exthumbimage="images/tab/3.jpg" data-src="images/tab/3.jpg" >
                                                    <img class="img-fluid" src="images/tab/3.jpg" alt="" width="50">
                                                </a>
                                                <a class="detay-lgl mb-2" href="images/tab/4.jpg" data-exthumbimage="images/tab/4.jpg" data-src="images/tab/4.jpg" >
                                                    <img class="img-fluid" src="images/tab/4.jpg" alt="" width="50">
                                                </a>
                                                <a class="detay-lgl mb-2" href="images/tab/4.jpg" data-exthumbimage="images/tab/4.jpg" data-src="images/tab/4.jpg" >
                                                    <img class="img-fluid" src="images/tab/4.jpg" alt="" width="50">
                                                </a>     
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Tab slider End-->
                                    <div class="col-xl-9 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                        <div class="product-detail-content">
                                            <!--Product details-->
                                            <div class="new-arrival-content pr">
                                                <h4>??r??n ad??</h4>
												<hr>
                                                <p>Sipari?? durumu: 
													<span class="item text-danger">??ptal Edildi</span>
													<span class="item text-black">Kargo Yolda</span>
													<span class="item text-success">Tamamland??</span>
													<span class="item text-warning">Beklemede</span>
													<span class="item text-primary">Haz??rlan??yor</span>
                                                </p>
                                                <p>??r??n kodu: <span class="item">000</span> </p>
                                            	<p>Marka: <span class="item">marka_bilgi</span></p>
												<p>??stenilen Adet: <span class="item">1</span></p>
												<p>??r??n a????klamas??: <span class="item">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                                                    If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing.</span></p>
												<div class="filtaring-area mb-3">
													<hr>
                                                    <div class="size-filter">
														<p>??r??n renk se??iminiz:</p>
														<div class="input-group mb-3 input-success-o">
															<input type="text" class="col-xl-6 col-lg-6 col-md-12 col-xxl-6 col-sm-12 yukseklik40 form-control input-default input-kapali" placeholder="Se??ilen Renk Ad??" disabled="disabled">
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
                </div>
            </div>
        </div>
		
        <div class="footer">
            <div class="copyright text-center">
				<p><strong>Periwonen Y??netim Paneli</strong> ?? 2021 All Rights Reserved</p>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url("assets/staff/vendor/global/global.min.js")?>"></script>
	<script src="<?php echo base_url("assets/staff/vendor/bootstrap-select/dist/js/bootstrap-select.min.js")?>"></script>
    <script src="<?php echo base_url("assets/staff/js/custom.min.js")?>"></script>
	<script src="<?php echo base_url("assets/staff/js/deznav-init.js")?>"></script>
    <script src="<?php echo base_url("assets/staff/vendor/highlightjs/highlight.pack.min.js")?>"></script>
	<script src="<?php echo base_url("assets/staff/vendor/star-rating/jquery.star-rating-svg.js")?>"></script>
    <script src="<?php echo base_url("assets/staff/vendor/lightgallery/js/lightgallery-all.min.js")?>"></script>
	<script src="<?php echo base_url("assets/staff/vendor/select2/js/select2.full.min.js")?>"></script>
    <script src="<?php echo base_url("assets/staff/js/plugins-init/select2-init.js")?>"></script>
	

	<script>
		$('#lightgallery').lightGallery({
			loop:true,
			thumbnail:true,
			exThumbImage: 'data-exthumbimage'
		});
	</script>

</body>


</html>