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
                        <h6 class="text-white text-capitalize ps-3">Edit Anggota</h6>
                    </div>
                    <?php if (!empty(session()->getFlashdata('error'))) : ?>
                        <div style="margin-top:3%;" class="valid">
                            <div class="alert alert-danger text-white " role="alert">
                                <?php echo session()->getFlashdata('error'); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (session()->getFlashdata('error')) : ?>

                        <div style="width: 20vw; margin-left: 1vw;" class="alerta">
                            <div style="color: white;" class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Sukses!</strong> <?php echo session()->getFlashdata('error'); ?>
                                <button type="button" style="color: white;" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i style="margin-right: 20px;" class="fas fa-times"></i></button>
                            </div>
                        </div>
                    <?php endif; ?>
                    <form style="margin-top:3%;margin-bottom: 3%;" action="/Dashboard/ubahAng/<?= $anggota['id_anggota']; ?>" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="form-group">
                            <label class="text-primary">Nama Lengkap</label>
                            <input style="margin-left: 0.5%; padding-left: 1vw;" autofocus value="<?= $anggota['nama_lengkap']; ?>" type="text" name="nama_lengkap" class="form-control" placeholder="Masukkan Judul Buku">
                        </div>
                        <br>

                        <div class="form-group">
                            <label class="text-primary">Tanggal Lahir</label>
                            <input style="margin-left: 0.5%; padding-left: 1vw;" autofocus value="<?= $anggota['nama_lengkap']; ?>" type="date" name="tanggal_lahir" class="form-control" placeholder="Masukkan Judul Buku">
                        </div>
                        <br>

                        <label class="text-primary">Gender</label> <br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Laki-Laki">
                            <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Wanita">
                            <label class="form-check-label" for="inlineRadio2">Wanita</label>
                        </div>

                        <br>

                        <div class="form-group col-md-4">
                            <label class="text-primary" for="inputState">Alamat</label>
                            <select id="inputState" class="form-control" name="alamat">
                                <option disabled="disabled" selected="selected">Pilih Alamat Kota</option>
                                <?php foreach ($kota as $k) : ?>
                                    <option value="<?= $k['city_name']; ?>"><?= $k['city_name']; ?></option>
                                <?php endforeach ?>

                            </select>
                        </div>

                        <br>
                        <div class="form-group">
                            <label class="text-primary">Nomor Telepon</label>
                            <input style="margin-left: 0.5%; padding-left: 1vw;" autofocus value="<?= $anggota['nomor_telepon']; ?>" type="number" name="nomor_telepon" class="form-control" placeholder="Masukkan Judul Buku">
                        </div>
                        <br>

                        <div class="form-group">
                            <label class="text-primary">Pekerjaan</label><br>
                            <select name="pekerjaan" class="form-control">
                                <option disabled="disabled" selected="selected">Pilih Pekerjaan</option>
                                <option value="Siswa">Siswa</option>
                                <option value="Mahasiswa">Mahasiswa</option>
                                <option value="Pegawai Swasta">Pegawai Swasta</option>
                                <option value="Wiraswasta">Wiraswasta</option>
                                <option value="PNS">PNS</option>

                            </select>
                        </div>
                        <br>



                        <hr>

                        <div style="display: flex; margin-left:2%" class="buton">
                            <a class="btn btn-secondary mb-3" href="/Dashboard/detailAng/<?= $anggota['id_anggota']; ?>"><i style="padding-right: 5px;" class="fas fa-chevron-circle-left"></i> Kembali</a>
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