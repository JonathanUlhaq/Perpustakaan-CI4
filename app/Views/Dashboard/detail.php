<?= $this->extend('Layout/layout'); ?>
<?= $this->section('konten'); ?>


<div class="container-fluid py-4">
    <div class="row">
        <div class="card mb-3" style="max-width: 750px; margin-left: 20%;margin-top: 2%;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img style="margin-top:20px;" src="<?= base_url(); ?>/cover/<?= $buku['cover']; ?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Judul Buku : <?= $buku['judul']; ?></h5>
                        <hr>
                        <p class="card-text">Pengarang : <?= $buku['pengarang']; ?></p>
                        <p class="card-text">Penerbit : <?= $buku['penerbit']; ?></p>
                        <p class="card-text">Genre : <?= $buku['genre']; ?></p>
                        <p class="card-text">Tahun Terbit : <?= $buku['tahun_terbit']; ?></p>
                        <p class="card-text">Status : <span class="<?php if ($buku['status'] == 'Ada') { ?>
                                                badge badge-sm bg-gradient-success
                                                <?php } else { ?>
                                                    badge badge-sm bg-gradient-danger
                                                    <?php } ?>"><?= $buku['status']; ?></span>
                        <div style="display: flex;" class="butoon">

                            <a style="margin-right:1vw" href="/tabel" class=" btn btn-secondary" data-toggle="tooltip" data-original-title="Edit user">
                                <i class="fas fa-arrow-alt-circle-left"></i> Kembali
                            </a>

                            <a href="/edit/<?= $buku['id_buku']; ?>" class=" btn btn-primary" data-toggle="tooltip" data-original-title="Edit user">
                                Edit <i class="fas fa-edit"></i>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?= $this->endSection(); ?>