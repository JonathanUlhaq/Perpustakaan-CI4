    <?= $this->extend('Layout/layout'); ?>
    <?= $this->section('konten'); ?>


    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Tabel Riwayat Peminjaman</h6>
                        </div>
                    </div>



                    <div class="card-body px-0 pb-2">



                        <div class="table-responsive p-0">

                            <table class="table align-items-center mb-0">

                                <thead class="text-center">
                                    <tr>
                                        <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7">Id Peminjaman</th>
                                        <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7">Nama Peminjam</th>
                                        <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7">Tanggal Peminjaman</th>
                                        <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7">Status</th>


                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <?php foreach ($peminjam as $b) : ?>
                                        <tr>

                                            <td>
                                                <p class="text-md font-weight-bold mb-0"><?= $b['id_peminjaman']; ?></p>

                                            </td>
                                            <td>
                                                <p class="text-md font-weight-bold mb-0"><?= $b['nama_lengkap']; ?></p>

                                            </td>
                                            <td>
                                                <p class="text-md font-weight-bold mb-0"><?= $b['tanggal_peminjaman']; ?></p>

                                            </td>
                                            <td>
                                                <p class="text-md font-weight-bold mb-0"><span class="<?php if ($b['setatus'] == 'Sudah Kembali') { ?>
                                                badge badge-sm bg-gradient-success
                                                <?php } else { ?>
                                                    badge badge-sm bg-gradient-danger
                                                    <?php } ?>"><?= $b['setatus']; ?></span></p>

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