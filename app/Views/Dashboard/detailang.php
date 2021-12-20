<?= $this->extend('Layout/layout'); ?>
<?= $this->section('konten'); ?>


<div class="container-fluid py-4">
    <div class="row">

        <div class="card" style="width: 18rem;max-width: 750px; margin-left: 20%;margin-top: 2%;">
            <div class="card-header">
                ID Anggota : <strong> <?= $anggota['id_anggota']; ?></strong>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">ID Akun : <strong> <?= $anggota['id_akun']; ?></strong></li>
                <li class="list-group-item">Nama Lengkap : <strong> <?= $anggota['nama_lengkap']; ?></strong></li>
                <li class="list-group-item">Tempat Lahir : <strong> <?= $anggota['tempat_lahir']; ?></strong></li>
                <li class="list-group-item">Tanggal Lahir : <strong> <?= $anggota['tanggal_lahir']; ?></strong></li>
                <li class="list-group-item">Alamat : <strong> <?= $anggota['alamat']; ?></strong></li>
                <li class="list-group-item">Gender : <strong> <?= $anggota['gender']; ?></strong></li>
                <li class="list-group-item">Nomor Telepon : <strong> <?= $anggota['nomor_telepon']; ?></strong></li>
                <li class="list-group-item">Pekerjaan : <strong> <?= $anggota['pekerjaan']; ?></strong></li>
                <li class="list-group-item"><a style="margin-right:1vw" href="/anggota" class=" btn btn-secondary" data-toggle="tooltip" data-original-title="Edit user">
                        <i class="fas fa-arrow-alt-circle-left"></i> Kembali
                    </a>
                    <a href="/Dashboard/editAng/<?= $anggota['id_anggota']; ?>" class=" btn btn-primary" data-toggle="tooltip" data-original-title="Edit user">
                        Edit <i class="fas fa-edit"></i>
                    </a>
                </li>

            </ul>
        </div>

    </div>
</div>




<?= $this->endSection(); ?>