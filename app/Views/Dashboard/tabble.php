<?php if (in_groups('admin')) { ?>





    <div class="table-responsive p-0">

        <table class="table align-items-center mb-0">












            <!-- Button trigger modal -->




            <!-- Modal -->



            <tbody id="result">
                <?php foreach ($buku as $b) : ?>
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <div>
                                    <img src="<?= base_url(); ?>/cover/<?= $b['cover']; ?>" class="avatar avatar-xxl me-3 border-radius-lg" alt="user1">
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm"><?= $b['judul']; ?></h6>

                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="text-sm font-weight-bold mb-0"><?= $b['id_buku']; ?></p>

                        </td>

                        <td class="align-middle">

                            <a href="/detail/<?= $b['id_buku']; ?>" id="detail" class=" font-weight-bold text-sm" data-toggle="tooltip" data-original-title="Edit user">
                                Detail <i class="fas fa-info-circle"></i> |

                                <a onclick="return confirm('Apakah anda yakin menghapus ?')" href="/delete/<?= $b['id_buku']; ?>" id="hapus" class=" font-weight-bold text-sm" data-toggle="tooltip" data-original-title="Edit user">
                                    Hapus <i class="fas fa-trash-alt"></i>
                                </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>


    </div>





<?php } ?>

<?php if (in_groups('petugas')) { ?>
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
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Buku</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Id Buku</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($buku as $b) : ?>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="<?= base_url(); ?>/cover/<?= $b['cover']; ?>" class="avatar avatar-xxl me-3 border-radius-lg" alt="user1">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm"><?= $b['judul']; ?></h6>

                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0"><?= $b['id_buku']; ?></p>

                                        </td>


                                        <td class="align-middle">
                                            <a href="/detail/<?= $b['id_buku']; ?>" id="detail" class=" font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                Detail <i class="fas fa-info-circle"></i>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <?= $this->endSection(); ?>
<?php } ?>