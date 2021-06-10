
<?php  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>panel</title>
    <link rel="icon" type="image/png" sizes="16x16" href="<?php  echo base_url("assets/admin/images/panel.ico")?>">
    <link href="<?php  echo base_url("assets/admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css") ?> " rel="stylesheet">
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
							Tüm Hesaplar
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
							<li><a href="<?php echo base_url("admin/createaccount") ?>">Hesap Oluştur</a></li>
							<li><a href="<?php echo base_url("admin/allaccount") ?>">Tüm Hesaplar</a></li>
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
						<li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Bootstrap</a></li>
					</ol>
                </div>
                <!-- row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Reseller Hesaplar</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr class="cblack">
                                                <th class="width50"></th>
                                                <th>Ad Soyad</th>
                                                <th>E-Posta</th>
                                                <th>Telefon</th>
                                                <th>Kayıt Tarihi</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($res as $r) { ?>
                                            <tr>
                                                <td class="sorting_1"><img class="rounded-circle" width="35" src="<?php echo base_url("assets/pp/".$r["fotograf"]) ?>"></td>
                                                <td><?php echo $r["ad_soyad"] ?></td>
                                                <td><?php echo $r["eposta"] ?></td>
                                                <td><?php echo $r["telefon1"] ?></td>
                                                <td><?php echo $r["kayit_tarihi"] ?></td>
                                                <td>
													<div class="d-flex floatr">
													
                                                        <form action="<?php echo base_url("admin/createreseller") ?>" method="get">
                                                        <button href="" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                                                        <input type="hidden" name="ad_soyad" value="<?php echo $r["ad_soyad"] ?>" />
                                                        <input type="hidden" name="eposta" value="<?php echo $r["eposta"] ?>" />
                                                        <input type="hidden" name="telefon1" value="<?php echo $r["telefon1"] ?>" />
                                                        <input type="hidden" name="telefon2" value="<?php echo $r["telefon2"] ?>" />
                                                        <input type="hidden" name="sifre" value="<?php echo $r["sifre"] ?>" />
                                                        <input type="hidden" name="id" value="<?php echo $r["id"] ?>" />
                                                       <button><i class="fa fa-trash"></i></button>

                                                        </form>
													</div>
												</td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                    <div class="col-12">
                                        <nav>
                                            <ul class="pagination float-right">
                                                <li class="page-item page-indicator">
                                                    <a class="page-link" href="javascript:void()">
                                                        <i class="la la-angle-left"></i></a>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="javascript:void()">1</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="javascript:void()">2</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void()">3</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void()">4</a></li>
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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Shop Manager Hesaplar</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr class="cblack">
                                                <th class="width50"></th>
                                                <th>Mağaza Adı</th>
                                                <th>E-Posta</th>
                                                <th>Telefon</th>
                                                <th>Kayıt Tarihi</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($sm as $r) { ?> 
                                            <tr>
                                                <td class="sorting_1"><img class="rounded-circle" width="35" src="<?php echo base_url("assets/pp/".$r["foto"]) ?>"></td>
                                                <td><?php echo $r["magaza_adi"] ?></td>
                                                <td><?php echo $r["eposta"] ?></td>
                                                <td><?php echo $r["telefon1"] ?></td>
                                                <td><?php echo $r["kayit_tarihi"] ?></td>
                                                <td>
													<div class="d-flex floatr">
                                                    <form action="<?php echo base_url("admin/createmanager") ?>" method="get">
                                                        <button href="" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                                                        <input type="hidden" name="ad_soyad" value="<?php echo $r["ad_soyad"] ?>" />
                                                        <input type="hidden" name="eposta" value="<?php echo $r["eposta"] ?>" />
                                                        <input type="hidden" name="telefon1" value="<?php echo $r["telefon1"] ?>" />
                                                        <input type="hidden" name="telefon2" value="<?php echo $r["telefon2"] ?>" />
                                                        <input type="hidden" name="sifre" value="<?php echo $r["sifre"] ?>" />
                                                        <input type="hidden" name="id" value="<?php echo $r["id"] ?>" />
                                                        <input type="hidden" name="magaza_adi" value="<?php echo $r["magaza_adi"] ?>">
                                                        <input type="hidden" name="website" value="<?php echo $r["website"] ?>">
                                                        <input type="hidden" name="kvk" value="<?php echo $r["kvk"] ?>">
                                                        <input type="hidden" name="para_limit" value="<?php echo $r["para_limit"] ?>">
                                                        <input type="hidden" name="adres" value="<?php echo $r["adres"] ?>">
                                                        <input type="hidden" name="edit" value="true">

                                                       <button><i class="fa fa-trash"></i></button>

                                                        </form>					</div>
												</td>
                                            </tr>
                                            <?php } ?>
                                        </tbody> 
                                    </table>
                                    <div class="col-12">
                                        <nav>
                                            <ul class="pagination float-right">
                                                <li class="page-item page-indicator">
                                                    <a class="page-link" href="javascript:void()">
                                                        <i class="la la-angle-left"></i></a>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="javascript:void()">1</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="javascript:void()">2</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void()">3</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void()">4</a></li>
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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Staff Hesaplar</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr class="cblack">
                                                <th class="width50"></th>
                                                <th>Ad Soyad</th>
                                                <th>E-Posta</th>
                                                <th>Cinsiyet</th>
                                                <th>Telefon</th>
                                                <th>Kayıt Tarihi</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="sorting_1"><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg"></td>
                                                <td>Ad Soyad</td>
                                                <td>example@example.com	</td>
                                                <td>Kadın</td>
                                                <td>000-000-0000</td>
                                                <td>01/01/2021</td>
                                                <td>
													<div class="d-flex floatr">
														<a href="staff-hesap.php" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
											<tr>
                                                <td class="sorting_1"><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg"></td>
                                                <td>Ad Soyad</td>
                                                <td>example@example.com	</td>
                                                <td>Kadın</td>
                                                <td>000-000-0000</td>
                                                <td>01/01/2021</td>
                                                <td>
													<div class="d-flex floatr">
														<a href="staff-hesap.php" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="col-12">
                                        <nav>
                                            <ul class="pagination float-right">
                                                <li class="page-item page-indicator">
                                                    <a class="page-link" href="javascript:void()">
                                                        <i class="la la-angle-left"></i></a>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="javascript:void()">1</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="javascript:void()">2</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void()">3</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void()">4</a></li>
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
</body>

</html>