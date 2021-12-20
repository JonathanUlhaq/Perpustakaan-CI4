<?= $this->extend('LayoutUser/layout'); ?>
<?= $this->section('konten'); ?>
<?php if (!empty($cart->contents())) { ?>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <section id="update" class="popular-deals section bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php if (!empty(session()->getFlashdata('berhasil'))) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Berhasil!</strong> <?php echo session()->getFlashdata('berhasil'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty(session()->getFlashdata('berhasils'))) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Berhasil!</strong> <?php echo session()->getFlashdata('berhasils'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>

                    <div class="section-title">
                        <h2>Lihat Keranjang Buku</h2>
                    </div>
                    <form action="/User/update" method="POST">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Cover</th>
                                    <th scope="col">Judul Buku</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $jum = 0;
                                $i = 1;
                                foreach ($cart->contents() as $c) :
                                    $jum = $jum + $c['qty']; ?>
                                    <tr>
                                        <th scope="row"><input style="width: 100px;" type="number" class="form-control" name="qty<?= $i++; ?>" value="<?= $c['qty']; ?>"></th>
                                        <td> <img style="height:10vw;width: 8vw;" class="card-img-top img-fluid" src="<?= base_url(); ?>/cover/<?= $c['options']['cover']; ?>" alt="<?= $c['name']; ?>"></td>
                                        <td><?= $c['name']; ?></td>
                                        <td><a href="/User/delete/<?= $c['rowid']; ?>"><i class='fas fa-trash' style='font-size:24px;color:red'></i></a></td>
                                    </tr>
                                <?php endforeach ?>

                            </tbody>
                        </table>

                        <div style="margin-top: 3vw;margin-left: 30vw;" class="col-6">
                            <table class="table table-hover">
                                <tr>
                                    <td> <strong>Jumlah Buku :</strong> <?= $jum; ?></td>

                                </tr>



                            </table>
                        </div>

                        <div style="display: flex;" class="buton">
                            <a style="margin-right: 10px;" href="#checkout" class="btn btn-primary" type="submit">Checkout</a>
                            <button class="btn btn-success" type="submit">Update</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="checkout" class="popular-deals section bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>Checkout Buku</h2>
                    </div>
                    <form action="/User/checkout" method="POST">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Cover</th>
                                    <th scope="col">Judul Buku</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $jum = 0;
                                $i = 1;
                                foreach ($cart->contents() as $c) :
                                    $jum = $jum + $c['qty']; ?>
                                    <tr>
                                        <th scope="row"><?= $c['qty']; ?></th>
                                        <td> <img style="height:10vw;width: 8vw;" class="card-img-top img-fluid" src="<?= base_url(); ?>/cover/<?= $c['options']['cover']; ?>" alt="<?= $c['name']; ?>"></td>
                                        <td><?= $c['name']; ?></td>

                                    </tr>
                                <?php endforeach ?>

                            </tbody>
                        </table>

                        <div style="margin-top: 3vw;margin-left: 30vw;" class="col-6">
                            <table class="table table-hover">
                                <tr>
                                    <td> <strong>Jumlah Buku :</strong> <?= $jum; ?></td>

                                </tr>



                            </table>
                        </div>

                        <div style="display: flex;" class="buton">
                            <button style="margin-right: 10px;" class="btn btn-primary text-white" type="submit">Checkout</button>
                            <a class="btn btn-success" href="#update" type="submit">Update</a>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
<?php } else { ?>
    <section class="popular-deals section bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h2>Oops, Kamu belum memilih buku untuk dipinjam</h2>

                </div>
            </div>
        </div>
    </section>
<?php } ?>
<?= $this->endSection(); ?>