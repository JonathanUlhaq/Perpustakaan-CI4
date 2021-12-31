<?php if (in_groups('petugas') || in_groups('admin')) { ?>
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
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">weekend</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">Koleksi Buku</p>
                            <h4 class="mb-0"><?= $jumlah; ?> Buah</h4>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">

                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">person</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">Jumlah Member</p>
                            <h4 class="mb-0"><?= $jumelah; ?> Orang</h4>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">

                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">weekend</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">Transaksi Peminjaman Buku</p>
                            <h4 class="mb-0"><?= $jumeslah; ?> Transaksi</h4>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">

                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">weekend</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize"> Peminjaman Aktif</p>
                            <h4 class="mb-0"><?= $jumeslahs; ?> Transaksi</h4>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">

                </div>
            </div>
        </div>
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Tabel Peminjaman Aktif</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">

                            <?php if (session()->getFlashdata('yu')) : ?>

                                <div style="width: 20vw; margin-left: 1vw;" class="alerta">
                                    <div style="color: white;" class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>Sukses!</strong> <?php echo session()->getFlashdata('yu'); ?>
                                        <button type="button" style="color: white;" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i style="margin-right: 20px;" class="fas fa-times"></i></button>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <!-- <div style="margin-top: 1vw;margin-left: 2vw;" class="col-3">

                                <input type="text" style="padding-left: 1vw;" class="form-control" id="keyword" name="keyword" placeholder=" Cari Genre ......">

                            </div> -->
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0 text-center">

                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id Peminjaman</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Peminjam</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal Peminjaman</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal Pengembalian</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Qty</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody id="result" class="text-center">
                                        <?php foreach ($peminjam as $p) : ?>

                                            <tr>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0"><?= $p['id_peminjaman']; ?></p>
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
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0"><?= $p['jumlah_buku']; ?></p>

                                                </td>


                                                <td class="align-middle">
                                                    <a href="/Dashboard/kembali/<?= $p['id_peminjaman']; ?>/<?= $p['id_buku']; ?>" id="detail" class=" btn btn-primary" data-toggle="tooltip" data-original-title="Edit user">
                                                        Kembali <i style="margin-left: 0.5vw;" class="fas fa-undo-alt"></i>
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
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="<?= base_url(); ?>/assets/js/core/popper.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/core/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/plugins/chartjs.min.js"></script>
    <script>
        var ctx = document.getElementById("chart-bars").getContext("2d");

        new Chart(ctx, {
            type: "bar",
            data: {
                labels: ["M", "T", "W", "T", "F", "S", "S"],
                datasets: [{
                    label: "Sales",
                    tension: 0.4,
                    borderWidth: 0,
                    borderRadius: 4,
                    borderSkipped: false,
                    backgroundColor: "rgba(255, 255, 255, .8)",
                    data: [50, 20, 10, 22, 50, 10, 40],
                    maxBarThickness: 6
                }, ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: 'rgba(255, 255, 255, .2)'
                        },
                        ticks: {
                            suggestedMin: 0,
                            suggestedMax: 500,
                            beginAtZero: true,
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                            color: "#fff"
                        },
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: 'rgba(255, 255, 255, .2)'
                        },
                        ticks: {
                            display: true,
                            color: '#f8f9fa',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });


        var ctx2 = document.getElementById("chart-line").getContext("2d");

        new Chart(ctx2, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0,
                    borderWidth: 0,
                    pointRadius: 5,
                    pointBackgroundColor: "rgba(255, 255, 255, .8)",
                    pointBorderColor: "transparent",
                    borderColor: "rgba(255, 255, 255, .8)",
                    borderColor: "rgba(255, 255, 255, .8)",
                    borderWidth: 4,
                    backgroundColor: "transparent",
                    fill: true,
                    data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: 'rgba(255, 255, 255, .2)'
                        },
                        ticks: {
                            display: true,
                            color: '#f8f9fa',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#f8f9fa',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });

        var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

        new Chart(ctx3, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0,
                    borderWidth: 0,
                    pointRadius: 5,
                    pointBackgroundColor: "rgba(255, 255, 255, .8)",
                    pointBorderColor: "transparent",
                    borderColor: "rgba(255, 255, 255, .8)",
                    borderWidth: 4,
                    backgroundColor: "transparent",
                    fill: true,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: 'rgba(255, 255, 255, .2)'
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#f8f9fa',
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#f8f9fa',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });
    </script>


    </body>

    </html>
    <!-- <script>
        var keyword = document.getElementById('keyword')
        var result = document.getElementById('result')

        keyword.addEventListener('keyup', function() {
            var ajax = XMLHttpRequest()


            ajax.onreadystatechange = function() {
                if (ajax.readyState == 4 && ajax.status == 200) {
                    result.innerHTML = ajax.responseText
                }
            }

            ajax.open('GET', '/Dashboard/care?keyword=' + keyword.value, true)
            ajax.send()
        })
    </script> -->
    <?= $this->endSection(); ?>
<?php } else {
    header("Location:/forms");
    exit();
} ?>