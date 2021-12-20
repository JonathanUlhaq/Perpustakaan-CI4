<?php if (in_groups('admin')) { ?>
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

                    <style>
                        .btn {
                            margin: 1vw;
                        }

                        #detail:hover {
                            color: #043d42;
                            transition: 1s;
                        }

                        #detail {
                            color: #068690;
                        }

                        #edit:hover {
                            color: #043d42;
                            transition: 1s;
                        }

                        #edit {
                            color: #068690;
                        }

                        #hapus:hover {
                            color: #620b04;
                            transition: 1s;
                        }

                        #hapus {
                            color: #bb190d;
                        }

                        input[type=text]:focus {
                            background-color: #f4f4f4;

                            transition: 1.5s;
                        }

                        input[type=text]:hover {
                            background-color: #f8f8f8;

                            transition: 1.5s;
                        }

                        input[type=number]:focus {
                            background-color: #f4f4f4;

                            transition: 1.5s;
                        }

                        input[type=number]:hover {
                            background-color: #f8f8f8;

                            transition: 1.5s;
                        }


                        select:hover {
                            width: 100%;
                            padding: 16px 20px;
                            border: none;
                            border-radius: 4px;
                            background-color: #f1f1f1;
                            transition: 1.5s;
                        }

                        .file {
                            opacity: 0;
                            width: 0.1px;
                            height: 0.1px;
                            position: absolute;
                        }

                        .file-input label {
                            display: block;
                            position: relative;
                            width: 180px;
                            height: 30px;
                            background: linear-gradient(180deg, #E12B6B 0%, #E12C6C 100%);
                            border-radius: 13px;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            color: #fff;
                            font-weight: bold;
                            cursor: pointer;
                            transition: 1.5s;
                        }

                        .file-input label:hover {

                            background: linear-gradient(180deg, #BB0A48 0%, #A2053C 100%);

                            transition: 1.5s;
                        }






                        input:focus {
                            background-color: #f4f4f4;

                            transition: 1.5s;
                        }

                        input:hover {
                            background-color: #f8f8f8;

                            transition: 1.5s;
                        }

                        input[type="file"] {
                            border: 1px solid #ccc;
                            display: inline-block;
                            padding: 6px 12px;
                            cursor: pointer;
                        }
                    </style>

                    <div class="card-body px-0 pb-2">



                        <div class="table-responsive p-0">

                            <table class="table align-items-center mb-0">

                                <?php if (!empty(session()->getFlashdata('errors'))) : ?>
                                    <div style="width: 20vw; margin-left: 1vw;" class="alerta">
                                        <div style="color: white;" class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>Error!</strong> <?php echo session()->getFlashdata('errors'); ?>
                                            <button type="button" style="color: white;" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i style="margin-right: 20px;" class="fas fa-times"></i></button>
                                        </div>
                                    </div>

                                <?php endif; ?>




                                <?php if (session()->getFlashdata('yes')) : ?>

                                    <<div style="width: 20vw; margin-left: 1vw;" class="alerta">
                                        <div style="color: white;" class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>Sukses!</strong> <?php echo session()->getFlashdata('yes'); ?>
                                            <button type="button" style="color: white;" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i style="margin-right: 20px;" class="fas fa-times"></i></button>
                                        </div>
                        </div>
                    <?php endif; ?>

                    <?php if (session()->getFlashdata('ubah')) : ?>

                        <div style="width: 20vw; margin-left: 1vw;" class="alerta">
                            <div style="color: white;" class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Sukses!</strong> <?php echo session()->getFlashdata('ubah'); ?>
                                <button type="button" style="color: white;" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i style="margin-right: 20px;" class="fas fa-times"></i></button>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if (session()->getFlashdata('hapus')) : ?>

                        <div style="width: 20vw; margin-left: 1vw;" class="alerta">
                            <div style="color: white;" class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Sukses!</strong> <?php echo session()->getFlashdata('hapus'); ?>
                                <button type="button" style="color: white;" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i style="margin-right: 20px;" class="fas fa-times"></i></button>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Tambah Buku <i style="padding-left: 5px;" class="fas fa-plus"></i>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Buku</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form style="margin-top:3%;margin-bottom: 3%;" action="/Dashboard/simpan" method="POST" enctype="multipart/form-data">
                                        <?= csrf_field(); ?>
                                        <div class="form-group">
                                            <label class="text-primary">Judul Buku</label>
                                            <input style="margin-left: 0.5%; padding-left: 1vw;" autofocus value="<?= old('judul'); ?>" type="text" name="judul" class="form-control" placeholder="Masukkan Judul Buku">
                                        </div>
                                        <br>

                                        <div class="file-input">
                                            <input type="file" name="cover" id="file" class="file">
                                            <label for="file">Upload Cover <i style="padding-left: 5px;" class=" fas fa-upload"></i></label>
                                        </div>

                                        <br>


                                        <div class="form-group">
                                            <label class="text-primary">Pengarang Buku</label>
                                            <input style="margin-left: 0.5%; padding-left: 1vw;" type="text" value="<?= old('pengarang'); ?>" name="pengarang" class="form-control" placeholder="Masukkan Nama Pengarang Buku">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label class="text-primary">Penerbit Buku</label>
                                            <input style="margin-left: 0.5%; padding-left: 1vw;" type="text" value="<?= old('penerbit'); ?>" name="penerbit" class="form-control" placeholder="Masukkan Penerbit Buku">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label class="text-primary">Tahun Terbit Buku</label>
                                            <input style="margin-left: 0.5%; padding-left: 1vw;" type="text" value="<?= old('tahun_terbit'); ?>" name="tahun_terbit" class="form-control" placeholder="Masukkan Tahun Terbit Buku">
                                        </div>
                                        <br>

                                        <div class="form-group col-md-4">
                                            <label class="text-primary" for="inputState">Genre</label>
                                            <select id="inputState" class="form-control" name="genre">
                                                <option selected>Pilih Genre...</option>
                                                <?php foreach ($genre as $g) : ?>
                                                    <option value="<?= $g['id_genre']; ?>"><?= $g['nama_genre']; ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <br>
                                        <input type="hidden" name="status" value="Ada"> <br>
                                        <hr>
                                        <br>
                                        <div style="display: flex; margin-left:18%" class="buton">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i style="padding-right: 5px;" class="fas fa-chevron-circle-left"></i>Kembali</button>

                                            <button style="margin-left: 2%;" type="submit" class="btn btn-primary mb-3" name="submit">
                                                Tambah <i style="padding-left: 5px;" class=" fas fa-book-medical fa-lg"></i>
                                            </button>


                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

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
                </div>
            </div>
        </div>
    </div>



    <?= $this->endSection(); ?>
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