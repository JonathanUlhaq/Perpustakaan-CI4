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