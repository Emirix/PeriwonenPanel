<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>panel</title>
    <link rel="icon" type="image/png" sizes="16x16" href="<?php  echo base_url("assets/shop/images/panel.ico") ?> ">
	<link rel="stylesheet" href="<?php  echo base_url("assets/shop/vendor/chartist/css/chartist.min.css") ?> ">
    <link href="<?php  echo base_url("assets/shop/vendor/bootstrap-select/dist/css/bootstrap-select.min.css") ?> " rel="stylesheet">
	<link href="<?php  echo base_url("assets/shop/vendor/owl-carousel/owl.carousel.css") ?> " rel="stylesheet">
    <link href="<?php  echo base_url("assets/shop/css/style.css") ?> " rel="stylesheet">
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
		<!-- Sepetim -->
		<?php require('sepetim.php'); ?>
		<!-- -->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
								Tüm Siparişlerim
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
                    <li><a class="ai-icon" href="urun-liste.php" aria-expanded="false">
							<i class="flaticon-381-list"></i>
							<span class="nav-text">Ürün Listesi</span>
						</a>
					</li>
					<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-price-tag"></i>
							<span class="nav-text">Siparişlerim</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="siparislerim.php">Tüm Siparişlerim</a></li>
                        </ul>
                    </li>
					<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-notepad"></i>
							<span class="nav-text">Destek</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="destek-taleplerim.php">Taleplerim</a></li>
                            <li><a href="talep-olustur.php">Talep oluştur</a></li>
                        </ul>
                    </li>
                </ul>
				<a href="talep-olustur.php">
					<div class="add-menu-sidebar">
						<svg width="125px" height="50px" viewBox="0 0 402 402">
							<g viewBox="0 0 402 402">
								<polygon style="fill: #ffffff;" points="0,318.5 0,83.5 400,83.5 402,83.5 382,112.87 402,142.241 382,171.615 402,200.99    382,230.366 402,259.741 382,289.121 402,318.5  "></polygon>
								<rect x="42.998" y="249.501" style="fill: #0b2a97;" width="108" height="34"></rect>
								<rect x="42.998" y="118.501" style="fill: #1234aac9;" width="108" height="136"></rect>
								<path style="fill: #ffffff;" d="M123,205.5H83c-2.409,0-4.69-1.085-6.209-2.955l-13-16c-2.786-3.429-2.265-8.468,1.164-11.254   c3.43-2.787,8.468-2.264,11.254,1.164L86.808,189.5H123c4.419,0,8,3.582,8,8C131,201.919,127.419,205.5,123,205.5z"></path>
								<path style="fill: #ffffff;" d="M89.992,227.501c-1.437,0-2.891-0.387-4.203-1.199c-3.757-2.326-4.917-7.256-2.591-11.013l13-21   c2.326-3.756,7.255-4.916,11.013-2.591c3.757,2.326,4.917,7.256,2.591,11.013l-13,21C95.289,226.156,92.671,227.501,89.992,227.501   z"></path>
								<path style="fill: #0b2a97;" d="M322,137.5H211c-4.418,0-8-3.581-8-8c0-4.418,3.582-8,8-8h111c4.418,0,8,3.582,8,8   C330,133.919,326.418,137.5,322,137.5z"></path>
								<path style="fill: #0b2a97;" d="M322,173.25H211c-4.418,0-8-3.581-8-8c0-4.418,3.582-8,8-8h111c4.418,0,8,3.582,8,8   C330,169.669,326.418,173.25,322,173.25z"></path>
								<path style="fill: #0b2a97;" d="M322,209H211c-4.418,0-8-3.581-8-8c0-4.418,3.582-8,8-8h111c4.418,0,8,3.582,8,8   C330,205.419,326.418,209,322,209z"></path>
								<path style="fill: #0b2a97;" d="M322,244.75H211c-4.418,0-8-3.581-8-8c0-4.418,3.582-8,8-8h111c4.418,0,8,3.582,8,8   C330,241.169,326.418,244.75,322,244.75z"></path>
								<path style="fill: #0b2a97;" d="M322,280.5H211c-4.418,0-8-3.582-8-8s3.582-8,8-8h111c4.418,0,8,3.582,8,8S326.418,280.5,322,280.5z   "></path>
							</g>
						</svg>
						<p class="font-w500 mb-0" style="line-height: 19px;">Yeni bir destek talebi oluştur</p>
					</div>
				</a>
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
						<li class="breadcrumb-item"><a href="javascript:void(0)">Siparişlerim</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Tüm Siparişlerim</a></li>
					</ol>
                </div>

                <div class="row">
					<div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tüm Siparişlerim</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr class="cblack">
                                                <th class="width80">ID</th>
                                                <th>Ürün</th>
                                                <th>Mağaza Adı</th>
                                                <th>Oluşturma</th>
                                                <th>Durum</th>
                                                <th>Teslimat Tarihi</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody class="cblack2">
										<tr>
                                                <td><b>#01</b></td>
                                                <td>Sipariş adı/Ürün adı</td>
                                                <td>Mağaza Adı</td>
                                                <td>01/01/2021 (00:00)</td>
                                                <td><span class="badge light badge-danger"><i class="fa fa-circle text-danger mr-1"></i>İptal Edildi</span></td>
                                                <td>00/00/0000</td>
                                                <td>
													<div class="dropdown">
														<button type="button" class="btn btn-dark light sharp" data-toggle="dropdown">
															<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item text-success" href="siparis-detay.php">Ürün Detayları</a>
															<hr class="m-1">
															<a class="dropdown-item text-danger" href="#">Siparişi İptal Et</a>
														</div>
													</div>
												</td>
                                            </tr>
											<tr>
                                                <td><b>#01</b></td>
                                                <td>Sipariş adı/Ürün adı</td>
                                                <td>Mağaza Adı</td>
                                                <td>01/01/2021 (00:00)</td>
                                                <td><span class="badge light badge-dark cblack"><i class="fa fa-circle text-black mr-1"></i>Kargo Yolda</span></td>
                                                <td>00/00/0000</td>
                                                <td>
													<div class="dropdown">
														<button type="button" class="btn btn-dark light sharp" data-toggle="dropdown">
															<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item text-success" href="siparis-detay.php">Ürün Detayları</a>
															<hr class="m-1">
															<a class="dropdown-item text-danger" href="#">Siparişi İptal Et</a>
														</div>
													</div>
												</td>
                                            </tr>
											<tr>
                                                <td><b>#01</b></td>
                                                <td>Sipariş adı/Ürün adı</td>
                                                <td>Mağaza Adı</td>
                                                <td>01/01/2021 (00:00)</td>
                                                <td><span class="badge light badge-success"><i class="fa fa-circle text-success mr-1"></i>Tamamlandı</span>
												</td>
                                                <td>Teslim edilmedi</td>
                                                <td>
													<div class="dropdown">
														<button type="button" class="btn btn-dark light sharp" data-toggle="dropdown">
															<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item text-success" href="siparis-detay.php">Ürün Detayları</a>
														</div>
													</div>
												</td>
                                            </tr>
											<tr>
                                                <td><b>#01</b></td>
                                                <td>Sipariş adı/Ürün adı</td>
                                                <td>Mağaza Adı</td>
                                                <td>01/01/2021 (00:00)</td>
                                                <td><span class="badge light badge-warning"><i class="fa fa-circle text-warning mr-1"></i>Beklemede</span>
												</td>
                                                <td>00/00/0000</td>
                                                <td>
													<div class="dropdown">
														<button type="button" class="btn btn-dark light sharp" data-toggle="dropdown">
															<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item text-success" href="siparis-detay.php">Ürün Detayları</a>
															<hr class="m-1">
															<a class="dropdown-item text-danger" href="#">Siparişi İptal Et</a>
														</div>
													</div>
												</td>
                                            </tr>
											<tr>
                                                <td><b>#01</b></td>
                                                <td>Sipariş adı/Ürün adı</td>
                                                <td>Mağaza Adı</td>
                                                <td>01/01/2021 (00:00)</td>
                                                <td><span class="badge light badge-primary"><i class="fa fa-circle text-primary mr-1"></i>Hazırlanıyor</span>
												</td>
                                                <td>00/00/0000</td>
                                                <td>
													<div class="dropdown">
														<button type="button" class="btn btn-dark light sharp" data-toggle="dropdown">
															<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item text-success" href="siparis-detay.php">Ürün Detayları</a>
															<hr class="m-1">
															<a class="dropdown-item text-danger" href="#">Siparişi İptal Et</a>
														</div>
													</div>
												</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="col-xl-12 col-lg-12">
						<div class="card">
							<div class="card-body yunus-center">
								<nav>
                                    <ul class="pagination pagination-gutter pagination-primary no-bg mb-0">
                                        <li class="page-item page-indicator">
                                            <a class="page-link" href="javascript:void()">
                                                <i class="la la-angle-left"></i></a>
                                        </li>
                                        <li class="page-item "><a class="page-link" href="javascript:void()">1</a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="javascript:void()">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void()">3</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void()">4</a></li>
										<input class="urunliste-kendinyaz" placeholder="...">
                                        <li class="page-item page-indicator">
                                            <a class="page-link" href="javascript:void()">
                                                <i class="la la-angle-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
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

    <script src="<?php echo base_url("assets/shop/vendor/global/global.min.js") ?> "></script>
	<script src="<?php echo base_url("assets/shop/vendor/bootstrap-select/dist/js/bootstrap-select.min.js") ?> "></script>
	<script src="<?php echo base_url("assets/shop/vendor/chart.js/Chart.bundle.min.js") ?> "></script>
    <script src="<?php echo base_url("assets/shop/js/custom.min.js") ?> "></script>
	<script src="<?php echo base_url("assets/shop/js/deznav-init.js") ?> "></script>
	<script src="<?php echo base_url("assets/shop/vendor/owl-carousel/owl.carousel.js") ?> "></script>
    <script src="<?php echo base_url("assets/shop/vendor/peity/jquery.peity.min.js") ?> "></script>
	<script src="<?php echo base_url("assets/shop/vendor/apexchart/apexchart.js") ?> "></script>
	<script src="<?php echo base_url("assets/shop/js/dashboard/dashboard-1.js") ?> "></script>
	
	<script>
		function carouselReview(){
			/*  testimonial one function by = owl.carousel.js */
			jQuery('.testimonial-one').owlCarousel({
				loop:true,
				autoplay:true,
				margin:30,
				nav:false,
				dots: false,
				left:true,
				navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
				responsive:{
					0:{
						items:1
					},
					484:{
						items:2
					},
					882:{
						items:3
					},	
					1200:{
						items:2
					},			
					
					1540:{
						items:3
					},
					1740:{
						items:4
					}
				}
			})			
		}
		jQuery(window).on('load',function(){
			setTimeout(function(){
				carouselReview();
			}, 1000); 
		});
	</script>
</body>
</html>