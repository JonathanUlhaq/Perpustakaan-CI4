<?= $this->extend('LayoutUser/layout'); ?>
<?= $this->section('konten'); ?>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<!--===============================
=            Hero Area            =
================================-->

<section class="hero-area bg-1 text-center overly">
    <!-- Container Start -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if (!empty(session()->getFlashdata('yes'))) : ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Berhasil!</strong> <?php echo session()->getFlashdata('yes'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <!-- Header Contetnt -->
                <div class="content-block">
                    <h1>Perpustakaan Online </h1>
                    <p>Selamat Datang di Perpustakaan Online</p>


                </div>
                <!-- Advance Search -->


            </div>
        </div>
    </div>
    <!-- Container End -->
</section>

<!--===================================
=            Client Slider            =
====================================-->


<!--===========================================
=            Popular deals section            =
============================================-->

<section class="popular-deals section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="section-title">
                    <h2>Buku Trending</h2>
                    <p>Perpustakaan Online satu-satunya di Indoensia</p>
                </div>
            </div>
        </div>
        <?php if (!empty(session()->getFlashdata('berhasil'))) : ?>
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong>Berhasil!</strong> <?php echo session()->getFlashdata('berhasil'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>

        <?php if (!empty(session()->getFlashdata('berhasilss'))) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Berhasil!</strong> <?php echo session()->getFlashdata('berhasilss'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <div class="row align-items-start">
            <!-- offer 01 -->
            <?php foreach ($buku as $b) : ?>
                <div class="col-lg-4 col-lg-3">
                    <!-- product card -->
                    <div class="product-item bg-light">
                        <?php echo form_open('User/add');
                        echo form_hidden('id', $b['id_buku']);
                        echo form_hidden('price', 0);
                        echo form_hidden('name', $b['judul']);

                        echo form_hidden('cover', $b['cover']);


                        ?>
                        <div style="height:40vw" class="card">
                            <div class="thumb-content">
                                <!-- <div class="price">$200</div> -->
                                <a href="#">
                                    <img style="height:25vw" class="card-img-top img-fluid" src="<?= base_url(); ?>/cover/<?= $b['cover']; ?>" alt="<?= $b['judul']; ?>">
                                </a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title"><?= $b['judul']; ?></h4>
                                <ul class="list-inline product-meta">
                                    <li class="list-inline-item">
                                        <p href="single.html"><i class="fa fa-film"></i> <?= $b['nama_genre']; ?></p>
                                    </li>
                                    <li class="list-inline-item">
                                        <phref="#"><i class="fa fa-calendar"></i> <?= $b['tahun_terbit']; ?></p>
                                    </li>
                                </ul>
                                <p class="card-text">Pengarang : <?= $b['pengarang']; ?></p>
                                <div class="booton">
                                    <button type="submit" class="btn btn-primary">Pinjam <i class="fa fa-book" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <?php echo form_close() ?>
                    </div>



                </div>
            <?php endforeach ?>


        </div>


    </div>
    </div>
</section>



<!--==========================================
=            All Category Section            =
===========================================-->




<!--====================================
=            Call to Action            =
=====================================-->



<!--============================
=            Footer            =
=============================-->
<?= $this->endSection(); ?>