<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>panel</title>
    <!-- Favicon icon -->
	<link href="<?php  echo base_url("assets/shop/vendor/lightgallery/css/lightgallery.min.css") ?> " rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php  echo base_url("assets/shop/images/panel.ico")?>">
	<link href="<?php  echo base_url("assets/shop/vendor/bootstrap-select/dist/css/bootstrap-select.min.css") ?> " rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="vendor/star-rating/star-rating-svg.css") ?> ">
	<link rel="stylesheet" href="<?php  echo base_url("assets/shop/vendor/select2/css/select2.min.css") ?> ">
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
								Ürün detayları
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
							<i class="flaticon-381-list"></i>
							<span class="nav-text">Mağaza</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="urun-liste.php">Ürün Listesi</a></li>
							<li><a href="urun-detay.php">Ürün Detayları</a></li>
                        </ul>
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
				<a href="">
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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-6  col-md-6 col-xxl-5 ">
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade show active" id="first">
                                                <img class="img-fluid" src="images/product/1.jpg" alt="">
												<span class="badge badge-danger sinirli-stok">Sınırlı stok</span>
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
                                                <h4>Ürün adı</h4>
												<hr>
                                                <div class="comment-review star-rating">
													<ul>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star-half-empty"></i></li>
														<li><i class="fa fa-star-half-empty"></i></li>
													</ul>
													<span class="review-text">(34 yorum) / </span><a class="product-review" href=""  data-toggle="modal" data-target="#reviewModal">Yorum yaz?</a>
												</div>
												<div class="d-table mb-2">
													<p class="price float-left d-block">15.125€</p>
                                                </div>
                                                <p>Stok durumu: 
													<span class="item text-success"> Stokta var <i class="fa fa-check-circle text-success"></i></span>
													<span class="item text-danger"> Sokta 20 ürün kaldı <i class="fa  fa-exclamation-circle text-danger"></i></span>
                                                </p>
                                                <p>Ürün kodu: <span class="item">000</span> </p>
                                            	<p>Marka: <span class="item">marka_bilgi</span></p>
                                                <p>Ürün etiketleri:&nbsp;&nbsp;
                                                    <span class="badge badge-success light">arama_etiketi</span>
                                                    <span class="badge badge-success light">arama_etiketi</span>
                                                    <span class="badge badge-success light">arama_etiketi</span>
                                                    <span class="badge badge-success light">arama_etiketi</span>
                                                </p>
												<p>Ürün açıklaması: <span class="item">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                                                    If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing.</span></p>
												<div class="filtaring-area mb-3">
													<hr>
                                                    <div class="size-filter">
														<p>Ürün renk seçimi: <span class="badge badge-xs light badge-danger" style="position: relative;top: -2px;">zorunlu</span></p>
														<div class="input-group mb-3 input-success-o">
                                            				<textarea type="text" class="col-6 form-control" placeholder="Lütfen renk seçiminizi buraya yazınız." style="min-height: 30px;"></textarea>
                                        				</div>
                                                    </div>
													<hr>
                                                </div>
												<div class="col-12 px-0">
												<p>bla bla bla: <span class="badge badge-xs light badge-danger" style="position: relative;top: -2px;">zorunlu</span>
														<span><div class="btn-group">
																<button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
																bla bla bla
																</button>
																<div class="dropdown-menu">
																	<a class="dropdown-item" href="#">
																		<span class="badge badge-primary light">+100€</span>
																		&nbsp; bla bla bla
																	</a>
																	<a class="dropdown-item" href="#">
																		<span class="badge badge-primary light">+100€</span>
																		&nbsp; bla bla bla
																	</a>
																	<a class="dropdown-item" href="#">
																		<span class="badge badge-primary light">+100€</span>
																		&nbsp; bla bla bla
																	</a>
																</div>
															</div>
														</span>
													</p>
													<p>bla bla bla: <span class="badge badge-xs light badge-danger" style="position: relative;top: -2px;">zorunlu</span>
														<span><div class="btn-group">
																<button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
																bla bla bla
																</button>
																<div class="dropdown-menu">
																	<a class="dropdown-item" href="#">
																		<span class="badge badge-primary light">+100€</span>
																		&nbsp; bla bla bla
																	</a>
																	<a class="dropdown-item" href="#">
																		<span class="badge badge-primary light">+100€</span>
																		&nbsp; bla bla bla
																	</a>
																	<a class="dropdown-item" href="#">
																		<span class="badge badge-primary light">+100€</span>
																		&nbsp; bla bla bla
																	</a>
																</div>
															</div>
														</span>
													</p>
													<p>bla bla bla: <span class="badge badge-xs light badge-danger" style="position: relative;top: -2px;">zorunlu</span>
														<span><div class="btn-group">
																<button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
																bla bla bla
																</button>
																<div class="dropdown-menu">
																	<a class="dropdown-item" href="#">
																		<span class="badge badge-primary light">+100€</span>
																		&nbsp; bla bla bla
																	</a>
																	<a class="dropdown-item" href="#">
																		<span class="badge badge-primary light">+100€</span>
																		&nbsp; bla bla bla
																	</a>
																	<a class="dropdown-item" href="#">
																		<span class="badge badge-primary light">+100€</span>
																		&nbsp; bla bla bla
																	</a>
																</div>
															</div>
														</span>
													</p>
													<p>bla bla bla: <span class="badge badge-xs light badge-danger" style="position: relative;top: -2px;">zorunlu</span>
														<span><div class="btn-group">
																<button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
																bla bla bla
																</button>
																<div class="dropdown-menu">
																	<a class="dropdown-item" href="#">
																		<span class="badge badge-primary light">+100€</span>
																		&nbsp; bla bla bla
																	</a>
																	<a class="dropdown-item" href="#">
																		<span class="badge badge-primary light">+100€</span>
																		&nbsp; bla bla bla
																	</a>
																	<a class="dropdown-item" href="#">
																		<span class="badge badge-primary light">+100€</span>
																		&nbsp; bla bla bla
																	</a>
																</div>
															</div>
														</span>
													</p>
													<p>bla bla bla: <span class="badge badge-xs light badge-danger" style="position: relative;top: -2px;">zorunlu</span>
														<span><div class="btn-group">
																<button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
																bla bla bla
																</button>
																<div class="dropdown-menu">
																	<a class="dropdown-item" href="#">
																		<span class="badge badge-primary light">+100€</span>
																		&nbsp; bla bla bla
																	</a>
																	<a class="dropdown-item" href="#">
																		<span class="badge badge-primary light">+100€</span>
																		&nbsp; bla bla bla
																	</a>
																	<a class="dropdown-item" href="#">
																		<span class="badge badge-primary light">+100€</span>
																		&nbsp; bla bla bla
																	</a>
																</div>
															</div>
														</span>
													</p>
													<hr>
                                                </div>

												<div class="col-12 px-0">
													<p>Ürün adet seçimi: <span class="badge badge-xs light badge-danger" style="position: relative;top: -2px;">zorunlu</span>
														<span><div class="btn-group">
																<button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
																	Adet seçimi yapılmadı
																</button>
																<div class="dropdown-menu">
																	<a class="dropdown-item" href="#">1 adet</a>
																	<a class="dropdown-item" href="#">2 adet</a>
																	<a class="dropdown-item" href="#">3 adet</a>
																</div>
															</div>
														</span>
													</p>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<!-- review -->
					<div class="modal fade" id="reviewModal">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Review</h5>
									<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form>
										<div class="text-center mb-4">
											<img class="img-fluid rounded" width="78" src="./images/avatar/1.jpg" alt="DexignZone">
										</div>
										<div class="form-group">
											<div class="rating-widget mb-4 text-center">
												<!-- Rating Stars Box -->
												<div class="rating-stars">
													<ul id="stars">
														<li class="star" title="Poor" data-value="1">
															<i class="fa fa-star fa-fw"></i>
														</li>
														<li class="star" title="Fair" data-value="2">
															<i class="fa fa-star fa-fw"></i>
														</li>
														<li class="star" title="Good" data-value="3">
															<i class="fa fa-star fa-fw"></i>
														</li>
														<li class="star" title="Excellent" data-value="4">
															<i class="fa fa-star fa-fw"></i>
														</li>
														<li class="star" title="WOW!!!" data-value="5">
															<i class="fa fa-star fa-fw"></i>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="form-group">
											<textarea class="form-control" placeholder="Comment" rows="5"></textarea>
										</div>
										<button class="btn btn-success btn-block">RATE</button>
									</form>
								</div>
							</div>
						</div>
					</div>
                </div>
				<div class="row">
                    <div class="col-lg-12">
						<div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-xxl-12 ">
									<p class="text-content">Ürün seçimlerini ve extra seçimlerini dikkatlice ayarlayınız, sepet ekleme işleminden sonra ürün Sepetinizde gözükecektir ve satın alma işlemini kontrollü bir şekilde gerçekleştirebileceksiniz.
										Ürün iptal işlemini satın aldıktan 48 saat içerisinde gerçekleştirme izniniz bulunmaktadır.
									</p>
										<div class="shopping-cart">
                                            <a class="col-12 btn btn-primary btn-lg" href="javascript:void(0)">
												<i class="fa fa-shopping-basket mr-2"></i>
												Sepete ekle
											</a>
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
    <script src="<?php echo base_url("assets/shop/vendor/global/global.min.js") ?> "></script>
	<script src="<?php echo base_url("assets/shop/vendor/bootstrap-select/dist/js/bootstrap-select.min.js") ?> "></script>
    <script src="<?php echo base_url("assets/shop/js/custom.min.js") ?> "></script>
	<script src="<?php echo base_url("assets/shop/js/deznav-init.js") ?> "></script>
    <script src="<?php echo base_url("assets/shop/vendor/highlightjs/highlight.pack.min.js") ?> "></script>
	<script src="<?php echo base_url("assets/shop/vendor/star-rating/jquery.star-rating-svg.js") ?> "></script>
    <script src="<?php echo base_url("assets/shop/vendor/lightgallery/js/lightgallery-all.min.js") ?> "></script>
	<script src="<?php echo base_url("assets/shop/vendor/select2/js/select2.full.min.js") ?> "></script>
    <script src="<?php echo base_url("assets/shop/js/plugins-init/select2-init.js") ?> "></script>
	

	<script>
		$('#lightgallery').lightGallery({
			loop:true,
			thumbnail:true,
			exThumbImage: 'data-exthumbimage'
		});
	</script>

</body>


</html>