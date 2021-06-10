<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>panel</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url("assets/staff/images/panel.ico")?>">
    <link href="<?php echo base_url("assets/staff/vendor/dropzone/dist/dropzone.css")?>" rel="stylesheet">
	<link href="<?php echo base_url("assets/staff/vendor/bootstrap-select/dist/css/bootstrap-select.min.css")?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/staff/css/style.css")?>" rel="stylesheet">
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
							Tüm Talepler
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
						<li class="breadcrumb-item"><a href="javascript:void(0)">Destek</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Tüm Talepler</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tüm Taleplerim</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr class="cblack">
                                                <th class="width80">ID</th>
                                                <th>Başlatan</th>
                                                <th>Konu</th>
                                                <th>Oluşturma</th>
                                                <th>Durum</th>
                                                <th>Son Güncelleme</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody class="cblack2">
										<tr>
                                                <td><b>#01</b></td>
                                                <td>Ad Soyad</td>
                                                <td>Talep Başlığı</td>
                                                <td>01/01/2021 (00:00)</td>
                                                <td><span class="badge light badge-danger"><i class="fa fa-circle text-danger mr-1"></i>İptal Edildi</span></td>
                                                <td>28/05/2021 (00:00)</td>
                                                <td>
													<div class="dropdown">
														<button type="button" class="btn btn-dark light sharp" data-toggle="dropdown">
															<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item text-success" href="viewticket.php">Yanıtla</a>
															<hr class="m-1">
															<a class="dropdown-item text-danger" href="#">Bildirimi Kapat</a>
														</div>
													</div>
												</td>
                                            </tr>
											<tr>
                                                <td><b>#01</b></td>
                                                <td>Ad Soyad</td>
                                                <td>Talep Başlığı</td>
                                                <td>01/01/2021 (00:00)</td>
                                                <td><span class="badge light badge-dark cblack"><i class="fa fa-circle text-black mr-1"></i>Kapandı</span></td>
                                                <td>28/05/2021 (00:00)</td>
                                                <td>
													<div class="dropdown">
														<button type="button" class="btn btn-dark light sharp" data-toggle="dropdown">
															<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item text-success" href="viewticket.php">Yanıtla</a>
															<hr class="m-1">
															<a class="dropdown-item text-danger" href="#">Bildirimi Kapat</a>
														</div>
													</div>
												</td>
                                            </tr>
											<tr>
                                                <td><b>#01</b></td>
                                                <td>Ad Soyad</td>
                                                <td>Talep Başlığı</td>
                                                <td>01/01/2021 (00:00)</td>
                                                <td><span class="badge light badge-success"><i class="fa fa-circle text-success mr-1"></i>Yanıtlandı</span>
												</td>
                                                <td>28/05/2021 (00:00)</td>
                                                <td>
													<div class="dropdown">
														<button type="button" class="btn btn-dark light sharp" data-toggle="dropdown">
															<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item text-success" href="viewticket.php">Yanıtla</a>
															<hr class="m-1">
															<a class="dropdown-item text-danger" href="#">Bildirimi Kapat</a>
														</div>
													</div>
												</td>
                                            </tr>
											<tr>
                                                <td><b>#01</b></td>
                                                <td>Ad Soyad</td>
                                                <td>Talep Başlığı</td>
                                                <td>01/01/2021 (00:00)</td>
                                                <td><span class="badge light badge-warning"><i class="fa fa-circle text-warning mr-1"></i>Müşteri Yanıtı</span>
												</td>
                                                <td>28/05/2021 (00:00)</td>
                                                <td>
													<div class="dropdown">
														<button type="button" class="btn btn-dark light sharp" data-toggle="dropdown">
															<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item text-success" href="viewticket.php">Yanıtla</a>
															<hr class="m-1">
															<a class="dropdown-item text-danger" href="#">Bildirimi Kapat</a>
														</div>
													</div>
												</td>
                                            </tr>
											<tr>
                                                <td><b>#01</b></td>
                                                <td>Ad Soyad</td>
                                                <td>Talep Başlığı</td>
                                                <td>01/01/2021 (00:00)</td>
                                                <td><span class="badge light badge-primary"><i class="fa fa-circle text-primary mr-1"></i>Açık</span>
												</td>
                                                <td>28/05/2021 (00:00)</td>
                                                <td>
													<div class="dropdown">
														<button type="button" class="btn btn-dark light sharp" data-toggle="dropdown">
															<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item text-success" href="viewticket.php">Yanıtla</a>
															<hr class="m-1">
															<a class="dropdown-item text-danger" href="#">Bildirimi Kapat</a>
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
    <script src="<?php echo base_url("assets/staff/vendor/global/global.min.js") ?> "></script>
	<script src="<?php echo base_url("assets/staff/vendor/bootstrap-select/dist/js/bootstrap-select.min.js") ?> "></script>
    <script src="<?php echo base_url("assets/staff/js/custom.min.js") ?> "></script>
	<script src="<?php echo base_url("assets/staff/js/deznav-init.js") ?> "></script>
    <script src="<?php echo base_url("assets/staff/vendor/dropzone/dist/dropzone.js") ?> "></script>

</body>
</html>