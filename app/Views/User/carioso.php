<div id="result" class="row align-items-start">
    <!-- offer 01 -->
    <?php if (empty($ide)) { ?>
        <?php foreach ($buku as $b) : ?>
            <div class="col-lg-4 col-lg-3">
                <!-- product card -->
                <div class="product-item bg-light">
                    <?php echo form_open('User/add');
                    echo form_hidden('id', $b['id_buku']);
                    echo form_hidden('price', 0);
                    echo form_hidden('name', $b['judul']);

                    echo form_hidden('cover', $b['cover']);


                    ?>
                    <div style="height:40vw" class="card">
                        <div class="thumb-content">
                            <!-- <div class="price">$200</div> -->
                            <a href="#">
                                <img style="height:25vw" class="card-img-top img-fluid" src="<?= base_url(); ?>/cover/<?= $b['cover']; ?>" alt="<?= $b['judul']; ?>">
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"><?= $b['judul']; ?></h4>
                            <ul class="list-inline product-meta">
                                <li class="list-inline-item">
                                    <p href="single.html"><i class="fa fa-film"></i> <?= $b['nama_genre']; ?></p>
                                </li>
                                <li class="list-inline-item">
                                    <phref="#"><i class="fa fa-calendar"></i> <?= $b['tahun_terbit']; ?></p>
                                </li>
                            </ul>
                            <p class="card-text">Pengarang : <?= $b['pengarang']; ?></p>
                            <div class="booton">
                                <button type="submit" class="btn btn-primary">Pinjam <i class="fa fa-book" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <?php echo form_close() ?>
                </div>



            </div>
        <?php endforeach ?>
    <?php } ?>

    <?php if (!empty($ide)) { ?>
        <?php foreach ($buku as $b) : ?>
            <!-- product card -->

            <?php echo form_open('User/add');
            echo form_hidden('id', $b['id_buku']);
            echo form_hidden('price', 0);
            echo form_hidden('name', $b['judul']);

            echo form_hidden('cover', $b['cover']);


            ?>
            <div style="height:40vw;width:15vw;margin-left: 5vw;" class="card">
                <div class="thumb-content">
                    <!-- <div class="price">$200</div> -->
                    <a href="#">
                        <img style="height:20vw;" class="card-img-top img-fluid" src="<?= base_url(); ?>/cover/<?= $b['cover']; ?>" alt="<?= $b['judul']; ?>">
                    </a>
                </div>
                <div class="card-body">
                    <h4 class="card-title"><?= $b['judul']; ?></h4>
                    <ul class="list-inline product-meta">
                        <li class="list-inline-item">
                            <p href="single.html"><i class="fa fa-film"></i> <?= $b['nama_genre']; ?></p>
                        </li>
                        <li class="list-inline-item">
                            <phref="#"><i class="fa fa-calendar"></i> <?= $b['tahun_terbit']; ?></p>
                        </li>
                    </ul>
                    <p class="card-text">Pengarang : <?= $b['pengarang']; ?></p>
                    <div class="booton">
                        <button type="submit" class="btn btn-primary">Pinjam <i class="fa fa-book" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>
            <?php echo form_close() ?>




</div>
<?php endforeach ?>
<?php } ?>

</div>