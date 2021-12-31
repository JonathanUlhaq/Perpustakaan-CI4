<?php if (in_groups('admin')) { ?>
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
                            border: 2px solid #d63670;
                            border-radius: 15px;
                            background-color: #f0f5f1;
                            transition: 1.5s;
                        }

                        input[type=text]:hover {
                            border: 2px solid #d63670;
                            border-radius: 15px;

                            transition: 1.5s;
                        }

                        input[type=number]:focus {
                            border: 2px solid #d63670;
                            border-radius: 15px;

                            transition: 1.5s;
                        }

                        input[type=number]:hover {
                            border: 2px solid #d63670;
                            border-radius: 15px;

                            transition: 1.5s;
                        }

                        input[type=text] {
                            border: 2px solid #eb4d87;
                            border-radius: 15px;

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

                    <div style="display: flex;" class="flelex">

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Tambah Genre <i style="padding-left: 5px;" class="fas fa-plus"></i>
                        </button>

                        <div style="margin-top: 1vw;margin-left: 45vw;" class="col-3">

                            <input type="text" style="padding-left: 1vw;" class="form-control" id="keyword" name="keyword" placeholder=" Cari Genre ......">

                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Buku</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form style="margin-top:3%;margin-bottom: 3%;" action="/Genre/simpan" method="POST" enctype="multipart/form-data">
                                        <?= csrf_field(); ?>

                                        <div class="form-group">
                                            <label class="text-primary">Id Genre</label>
                                            <input style="margin-left: 0.5%; padding-left: 1vw;" autofocus type="text" value="<?= old('id_genre'); ?>" name="id_genre" class="form-control" placeholder="Masukkan Id Genre">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label class="text-primary">Nama Genre</label>
                                            <input style="margin-left: 0.5%; padding-left: 1vw;" value="<?= old('nama_genre'); ?>" type="text" name="nama_genre" class="form-control" placeholder="Masukkan Nama Genre">
                                        </div>
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

                    <thead class="text-center">
                        <tr>
                            <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7">Id Genre</th>
                            <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7">Nama Genre</th>
                            <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">Aksi</th>

                            <th class="text-secondary opacity-7"></th>
                        </tr>
                    </thead>
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

    <script>
        var keyword = document.getElementById('keyword')
        var result = document.getElementById('result')

        keyword.addEventListener('keyup', function() {
            var xhr = XMLHttpRequest()

            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    result.innerHTML = xhr.responseText;
                }
            }
            xhr.open('GET', '/Genre/cari?keyword=' + keyword.value, true)
            xhr.send()
        })
    </script>

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



        <?= $this->endSection(); ?>
    <?php } ?>