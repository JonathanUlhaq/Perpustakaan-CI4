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
                            <h6 class="text-white text-capitalize ps-3">Tabel Riwayat Peminjaman</h6>
                        </div>
                    </div>



                    <div class="card-body px-0 pb-2">
                        <div style="display: flex;" class="flelex">



                            <div style="margin-top: 1vw;margin-left: 1vw;" class="col-3">

                                <input type="text" style="padding-left: 1vw;" class="form-control" id="keyword" name="keyword" placeholder=" Cari Riwayat Transaksi ......">

                            </div>
                        </div>





                        <div class="table-responsive p-0">

                            <table class="table align-items-center mb-0">

                                <thead class="text-center">
                                    <tr>
                                        <th class="text-uppercase text-md font-weight-bolder opacity-7">Id Peminjaman</th>
                                        <th class="text-uppercase text-md font-weight-bolder opacity-7">Nama Peminjam</th>
                                        <th class="text-uppercase text-md font-weight-bolder opacity-7">Tanggal Peminjaman</th>
                                        <th class="text-uppercase text-md font-weight-bolder opacity-7">Detail</th>



                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody id="result" class="text-center">
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

                                            <td class="align-middle">

                                                <a style="margin-top: 0.5vw;" href="/detailRiw/<?= $b['id_anggota']; ?>/<?= $b['id_peminjaman']; ?>" id="detail" class=" btn btn-primary" data-toggle="tooltip" data-original-title="Edit user">
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

                xhr.open('GET', '/Dashboard/riwayats?keyword=' + keyword.value, true)
                xhr.send()

            })
        </script>

        <?= $this->endSection(); ?>