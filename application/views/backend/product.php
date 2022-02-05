        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

            <?php if ($this->session->flashdata('berhasil')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $this->session->flashdata('berhasil'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>

            <div class="row">

                <div class="col-lg-12">

                    <!-- Circle Buttons -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Kelola Product</h6>
                        </div>

                        <div class="card-body">
                            <a href="<?= site_url('product/tambah') ?>" class="btn btn-primary mb-3">Tambah Data</a>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Keterangan</th>
                                            <th>Gambar</th>
                                            <th>Kontak</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($product as $prd) : ?>
                                            <tr>
                                                <td><?= $no; ?></td>
                                                <td><?= $prd['nama']; ?></td>
                                                <td><?= $prd['keterangan']; ?></td>
                                                <td><img src="<?= base_url() ?>assets/produk/<?= $prd['gambar']; ?>" alt="<?= $prd['gambar']; ?>" width="100"></td>
                                                <td><?= $prd['kontak']; ?></td>
                                                <td>
                                                    <div class="btn-group" role="group">
                                                        <a href="<?= site_url('product/ubah/') ?><?= $prd['id'] ?>" class="btn btn-warning btn-circle btn-sm">
                                                            <i class="fas fa-pen"></i></a>
                                                        <a href="<?= site_url('product/hapus/') ?><?= $prd['id'] ?>" class="btn btn-danger btn-circle btn-sm" onclick="return confirm('Yakin?');">
                                                            <i class="fas fa-trash"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php
                                            $no++;
                                        endforeach;
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



                </div>



            </div>

        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->