<ul class="navbar-nav header-right">
    <li class="nav-item">
        <div class="input-group search-area d-xl-inline-flex d-none">
            <div class="input-group-append">
                <span class="input-group-text"><a href="javascript:void(0)"><i
                            class="flaticon-381-search-2"></i></a></span>
            </div>
            <input type="text" class="form-control" placeholder="Arama yap...">
        </div>
    </li>
    <!-- Bildirim Kutusu -->
    <?php require('bildirimler.php'); ?>
    <!-- -->
    <li class="nav-item dropdown header-profile">
        <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
            <img src="images/profile/17.jpg" width="20" alt="" />
            <div class="header-info">
                <span class="text-black"><strong>Ad Soyad</strong></span>
                <p class="fs-12 mb-0">Yetki Adı</p>
            </div>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
            <a href="/index.php" class="dropdown-item ai-icon">
                <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                    <polyline points="16 17 21 12 16 7"></polyline>
                    <line x1="21" y1="12" x2="9" y2="12"></line>
                </svg>
                <span class="ml-2">Çıkış yap</span>
            </a>
        </div>
    </li>
</ul>