<?php if (!empty($detail['id_peminjaman'])) { ?>
    <?= $this->extend('LayoutUser/layout'); ?>
    <?= $this->section('konten'); ?>
    <section id="checkout" class="popular-deals section bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>Tanggungan Buku</h2>
                    </div>
                    <form action="/User/checkout" method="POST">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Cover</th>
                                    <th scope="col">Judul Buku</th>
                                    <th scope="col">Jumlah Buku</th>
                                    <th scope="col">Tanggal Peminjaman</th>
                                    <th scope="col">Tanggal Pengembalian</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $jum = 0;
                                $i = 1;
                                foreach ($tanggungan as $c) :
                                    $jum = $jum + $c['jumlah_buku']
                                ?>
                                    <tr>
                                        <th scope="row"><?= $i++; ?></th>
                                        <td> <img style="height:10vw;width: 8vw;" class="card-img-top img-fluid" src="<?= base_url(); ?>/cover/<?= $c['cover']; ?>" alt="<?= $c['judul']; ?>"></td>
                                        <td><?= $c['judul']; ?></td>
                                        <td><?= $c['jumlah_buku']; ?></td>
                                        <td><?= $c['tanggal_peminjaman']; ?></td>
                                        <td><?= $c['tanggal_pengembalian']; ?></td>

                                    </tr>
                                <?php endforeach ?>

                            </tbody>
                        </table>

                        <div style="margin-top: 3vw;margin-left: 30vw;" class="col-6">
                            <table class="table table-hover">
                                <tr>
                                    <td> <strong>Total Buku :</strong> <?= $jum; ?></td>

                                </tr>



                            </table>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="popular-deals section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h2>Oops, Kamu belum memilih buku untuk dipinjam</h2>

            </div>
        </div>
    </div>
</section> -->

    <?= $this->endSection(); ?>
<?php } else { ?>

    <?= $this->extend('LayoutUser/layout'); ?>
    <?= $this->section('konten'); ?>
    <section id="checkout" class="popular-deals section bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>Anda Tidak Memiliki Tanggungan Buku</h2>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- <section class="popular-deals section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h2>Oops, Kamu belum memilih buku untuk dipinjam</h2>

            </div>
        </div>
    </div>
</section> -->

    <?= $this->endSection(); ?>

<?php } ?>