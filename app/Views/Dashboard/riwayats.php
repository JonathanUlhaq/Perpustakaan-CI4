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







<div class="table-responsive p-0">

    <table class="table align-items-center mb-0">


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