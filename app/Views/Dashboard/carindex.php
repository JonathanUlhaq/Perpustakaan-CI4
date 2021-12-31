<div class="table-responsive p-0">
    <table class="table align-items-center mb-0 text-center">


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