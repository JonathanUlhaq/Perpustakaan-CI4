<?php if (in_groups('admin')) { ?>









    <tbody id="result" class="text-center">
        <?php foreach ($gener as $b) : ?>
            <tr>

                <td>
                    <p class="text-md font-weight-bold mb-0"><?= $b['id_genre']; ?></p>

                </td>
                <td>
                    <p class="text-md font-weight-bold mb-0"><?= $b['nama_genre']; ?></p>

                </td>


                <td class="align-middle">
                    <a href="/egenre/<?= $b['id_genre']; ?>" id="edit" class=" font-weight-bold text-md" data-toggle="tooltip" data-original-title="Edit user">
                        Edit <i class="fas fa-edit"></i> |
                    </a>
                    <a onclick="return confirm('Apakah anda yakin menghapus ?')" href="/edelete/<?= $b['id_genre']; ?>" id="hapus" class=" font-weight-bold text-md" data-toggle="tooltip" data-original-title="Edit user">
                        Hapus <i class="fas fa-trash-alt"></i>
                    </a>
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
                            <h6 class="text-white text-capitalize ps-3">Tabel Data Genre</h6>
                        </div>
                    </div>



                    <div class="card-body px-0 pb-2">



                        <div class="table-responsive p-0">

                            <table class="table align-items-center mb-0">

                                <thead class="text-center">
                                    <tr>
                                        <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7">Id Genre</th>
                                        <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7">Nama Genre</th>


                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <?php foreach ($gener as $b) : ?>
                                        <tr>

                                            <td>
                                                <p class="text-md font-weight-bold mb-0"><?= $b['id_genre']; ?></p>

                                            </td>
                                            <td>
                                                <p class="text-md font-weight-bold mb-0"><?= $b['nama_genre']; ?></p>

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



    <?php } ?>