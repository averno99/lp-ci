<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
    <?php if ($this->session->flashdata('login')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= $this->session->flashdata('login'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <div class="row">

        <div class="col-lg-6">

            <!-- Circle Buttons -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Ubah Password</h6>
                </div>
                <div class="card-body">
                    <?php if ($this->session->flashdata('berhasil')) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?= $this->session->flashdata('berhasil'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>

                    <?php if ($this->session->flashdata('pesan')) : ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?= $this->session->flashdata('pesan'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="passwordSekarang"><strong>Password Saat Ini</strong></label>
                            <input type="password" class="form-control" id="passwordSekarang" name="passwordSekarang" placeholder="Password Saat Ini">
                            <?= form_error('passwordSekarang', ' <small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="passwordBaru1"><strong>Password Baru</strong></label>
                            <div>
                                <input type="password" class="form-control" id="passwordBaru1" name="passwordBaru1" placeholder="Password Baru">
                                <?= form_error('passwordBaru1', ' <small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="mt-1">
                                <input type="password" class="form-control" id="passwordBaru2" name="passwordBaru2" placeholder="Ulangi Password Baru">
                                <?= form_error('passwordBaru2', ' <small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-content-save"></i> Simpan</button>
                        </div>
                    </form>
                </div>
            </div>



        </div>



    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->