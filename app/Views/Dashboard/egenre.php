<?= $this->extend('Layout/layout'); ?>
<?= $this->section('konten'); ?>


<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>


<style>
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
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Tambah Buku</h6>
                    </div>
                    <?php if (!empty(session()->getFlashdata('errors'))) : ?>
                        <div style="margin-top:3%;" class="valid">
                            <div class="alert alert-danger text-white " role="alert">
                                <?php echo session()->getFlashdata('errors'); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <form style="margin-top:3%;margin-bottom: 3%;" action="/Genre/ubah/<?= $buku['id_genre']; ?>" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="form-group">
                            <label class="text-primary">Id Genre</label>
                            <input style="margin-left: 0.5%; padding-left: 1vw;" autofocus type="text" value="<?= $buku['id_genre']; ?>" name="id_genre" class="form-control" placeholder="Masukkan Id Genre">
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="text-primary">Nama Genre</label>
                            <input style="margin-left: 0.5%; padding-left: 1vw;" value="<?= $buku['nama_genre']; ?>" type="text" name="nama_genre" class="form-control" placeholder="Masukkan Nama Genre">
                        </div>
                        <br>
                        <div style="display: flex; margin-left:2%" class="buton">
                            <a class="btn btn-secondary mb-3" href="/genre"><i style="padding-right: 5px;" class="fas fa-chevron-circle-left"></i> Kembali</a>
                            <button style="margin-left: 2%;" type="submit" class="btn btn-primary mb-3" name="submit">
                                Ubah <i style="padding-left: 5px;" class=" fas fa-edit fa-lg"></i>
                            </button>


                        </div>
                    </form>
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
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/material-dashboard.min.js?v=3.0.0"></script>

    <?= $this->endSection(); ?>