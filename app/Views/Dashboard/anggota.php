    <?= $this->extend('Layout/layout'); ?>
    <?= $this->section('konten'); ?>

    <style>
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



        input[type=text] {
            border: 2px solid #eb4d87;
            border-radius: 15px;

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
    </style>

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Tabel Data Anggota</h6>
                        </div>
                    </div>

                    <div style="display: flex;" class="flelex">



                        <div style="margin-top: 2vw;margin-left: 1vw;" class="col-3">
                            <form action="/Dashboard/anggota" method="POST">
                                <input type="text" style="padding-left: 1vw;" class="form-control" id="keyword" name="keyword" placeholder=" Cari Anggota ......">
                            </form>
                        </div>
                    </div>



                    <div class="card-body px-0 pb-2">
                        <?php if (session()->getFlashdata('yes')) : ?>

                            <div style="width: 20vw; margin-left: 1vw;" class="alerta">
                                <div style="color: white;" class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Sukses!</strong> <?php echo session()->getFlashdata('yes'); ?>
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
                        <div class="table-responsive p-0">

                            <table class="table align-items-center mb-0">

                                <thead class="text-center">
                                    <tr>
                                        <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7">Id Anggota</th>
                                        <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7">Nama Anggota</th>
                                        <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7">Aksi</th>


                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody id="result" class="text-center">
                                    <?php foreach ($anggota as $b) : ?>
                                        <tr>

                                            <td>
                                                <p class="text-md font-weight-bold mb-0"><?= $b['id_anggota']; ?></p>

                                            </td>
                                            <td>
                                                <p class="text-md font-weight-bold mb-0"><?= $b['nama_lengkap']; ?></p>

                                            </td>

                                            <td>
                                                <a style="margin-right:10px" href="/Dashboard/detailAng/<?= $b['id_anggota']; ?>" id="detail" class=" btn btn-success" data-toggle="tooltip" data-original-title="Edit user">
                                                    Detail <i style="margin-left: 0.5vw;" class="fas fa-info-circle"></i>

                                                    <a href="/Dashboard/deleteAng/<?= $b['id_anggota']; ?>" onclick="return confirm('Apakah anda yakin ?')" id="detail" class=" btn btn-primary" data-toggle="tooltip" data-original-title="Edit user">
                                                        Hapus <i style="margin-left: 0.5vw;" class="fa fa-trash"></i>
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
                var ajax = XMLHttpRequest()


                ajax.onreadystatechange = function() {
                    if (ajax.readyState == 4 && ajax.status == 200) {
                        result.innerHTML = ajax.responseText
                    }
                }

                ajax.open('GET', '/Dashboard/aanggota?keyword=' + keyword.value, true)
                ajax.send()
            })
        </script>

        <?= $this->endSection(); ?>