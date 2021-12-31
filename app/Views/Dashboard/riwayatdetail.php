    <?= $this->extend('Layout/layout'); ?>
    <?= $this->section('konten'); ?>


    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Tabel Data Buku</h6>
                        </div>
                    </div>


                    <div class="card-body px-0 pb-2">



                        <table class="table align-items-center mb-0">

                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id Peminjaman</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Id Buku</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">Buku</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Peminjam</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal Peminjaman</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal Pengembalian</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">Status</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($peminjam as $p) : ?>
                                    <tr class="text-center">
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0"><?= $p['id_peminjaman']; ?></p>

                                        </td>

                                        <td>
                                            <p class="text-xs font-weight-bold mb-0"><?= $p['id_buku']; ?></p>

                                        </td>

                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="<?= base_url(); ?>/cover/<?= $p['cover']; ?>" class="avatar avatar-lg me-3 border-radius-lg" alt="user1">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="text-xs font-weight-bold mb-0"><?= $p['judul']; ?></p>

                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <p class="text-xs font-weight-bold mb-0"><?= $p['nama_lengkap']; ?></p>

                                        </td>

                                        <td>
                                            <p class="text-xs font-weight-bold mb-0"><?= $p['tanggal_peminjaman']; ?></p>

                                        </td>

                                        <td>
                                            <p class="text-xs font-weight-bold mb-0"><?= $p['tanggal_pengembalian']; ?></p>

                                        </td>

                                        <td class="align-middle">
                                            <p style="margin-right: 1vw;" class="text-sm font-weight-bold mb-0"><span class="<?php if ($p['setatus'] == 'Sudah Kembali') { ?>
                                                badge badge-sm bg-gradient-success
                                                <?php } else { ?>
                                                    badge badge-sm bg-gradient-danger
                                                    <?php } ?>"><?= $p['setatus']; ?></span></p>

                                        </td>


                                    </tr>
                                <?php endforeach ?>

                            </tbody>
                        </table>

                        <a style="margin-left:2vw;margin-top: 2vw;;" href="/riwayat" class=" btn btn-secondary" data-toggle="tooltip" data-original-title="Edit user">
                            <i class="fas fa-arrow-alt-circle-left"></i> Kembali
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <?= $this->endSection(); ?>