<style>
    .dropdown-menu {
        max-height: 280px;
        overflow-y: auto;
    }
</style>

<nav style="background-color:white;" class="navbar sticky-top navbar-expand-lg navbar-light navigation">
    <a style="margin-left:50px" class="navbar-brand" href="#">
        <h2>E-PERPUS</h2>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto main-nav ">
            <li class="<?php if ($setatus == 'home') { ?>
                nav-item active
                    <?php } else { ?>
                        nav-item
                        <?php } ?>">
                <a class="nav-link" href="/user">Home</a>
            </li>

            <li class="<?php if ($setatus == 'tanggungan') { ?>
                nav-item active
                    <?php } else { ?>
                        nav-item
                        <?php } ?>">
                <a class="nav-link" href="/peminjaman">Tanggungan Buku</a>
            </li>

            <!-- <li class="nav-item dropdown dropdown-slide">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">Dashboard<span><i class="fa fa-angle-down"></i></span>
                </a> -->

            <!-- Dropdown list -->
            <!-- <div class="dropdown-menu">
                    <a class="dropdown-item" href="dashboard.html">Dashboard</a>
                    <a class="dropdown-item" href="dashboard-my-ads.html">Dashboard My Ads</a>
                    <a class="dropdown-item" href="dashboard-favourite-ads.html">Dashboard Favourite Ads</a>
                    <a class="dropdown-item" href="dashboard-archived-ads.html">Dashboard Archived Ads</a>
                    <a class="dropdown-item" href="dashboard-pending-ads.html">Dashboard Pending Ads</a>
                </div> -->
            <!-- </li> -->
            <!-- <li class="nav-item dropdown dropdown-slide">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Pages <span><i class="fa fa-angle-down"></i></span>
                </a> -->
            <!-- Dropdown list -->
            <!-- <div class="dropdown-menu">
                    <a class="dropdown-item" href="about-us.html">About Us</a>
                    <a class="dropdown-item" href="contact-us.html">Contact Us</a>
                    <a class="dropdown-item" href="user-profile.html">User Profile</a>
                    <a class="dropdown-item" href="404.html">404 Page</a>
                    <a class="dropdown-item" href="package.html">Package</a>
                    <a class="dropdown-item" href="single.html">Single Page</a>
                    <a class="dropdown-item" href="store.html">Store Single</a>
                    <a class="dropdown-item" href="single-blog.html">Single Post</a>
                    <a class="dropdown-item" href="blog.html">Blog</a>

                </div>
            </li>
            <li class="nav-item dropdown dropdown-slide">
                <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Listing <span><i class="fa fa-angle-down"></i></span>
                </a> -->
            <!-- Dropdown list -->
            <!-- <div class="dropdown-menu">
                    <a class="dropdown-item" href="category.html">Ad-Gird View</a>
                    <a class="dropdown-item" href="ad-listing-list.html">Ad-List View</a>
                </div>
            </li> -->
        </ul>
        <ul style="margin-right: 20px;" class="navbar-nav ml-auto mt-10">
            <?php $keranjang = $cart->contents();
            $jum = 0;
            foreach ($keranjang as $k) {
                $jum = $jum + $k['qty'];
            } ?>
            <li style="margin-right: 10px;margin-left: 10px;" class="nav-item dropdown dropdown-slide">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i style="margin-top: 0.5vw;" class="fa fa-shopping-cart fa-2x"></i>
                    <span style="margin-bottom: 1vw;" class="badge badge-danger navbar-badge"><?= $jum; ?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdwon-menu-right">

                    <?php if (empty($keranjang)) { ?>
                        <a href="#" class="dropdown-item">
                            <p>Keranjang Kosong</p>
                        </a>

                    <?php } else { ?>
                        <a href="#" class="dropdown-item">
                            <?php foreach ($keranjang as $b) : ?>
                                <div class="thumb-content">
                                    <!-- <div class="price">$200</div> -->
                                    <a href="#">
                                        <img style="height:18vw" class="card-img-top img-fluid" src="<?= base_url(); ?>/cover/<?= $b['options']['cover']; ?>" alt="<?= $b['name']; ?>">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <p class="card-title">Judul :<?= $b['name']; ?></p>
                                    <p class="card-title">Jumlah : <?= $b['qty']; ?></p>
                                </div>
                            <?php endforeach ?>
                            <style>
                                .dropdown-item:hover {
                                    background-color: #a7a7a8;
                                }
                            </style>
                            <a href="/User/cart" class="dropdown-item">
                                <h6>Lihat Keranjang Buku</h6>
                            </a>
                        </a>
                    <?php } ?>

                    </a>
                </div>
            </li>
            <li style="margin-right: 100px;margin-left: 10px; margin-top: 10px;" class="nav-item dropdown dropdown-slide">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href=""><?= $nama['username']; ?><span></i></span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/logout">Log Out</a>
                </div>
            </li>



        </ul>
    </div>
</nav>