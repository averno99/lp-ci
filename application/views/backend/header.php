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
                            <h6 class="m-0 font-weight-bold text-primary">Kelola Header</h6>
                        </div>

                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?= $header['id']; ?>">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <img src="<?= base_url('assets/header/') . $header['header']; ?>" class="img-thumbnail">
                                    </div>
                                    <div class="col-sm-12 align-self-end mt-2">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                            <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                                        </div>
                                        <!-- <small class="form-text text-muted"><span class="text-danger">*</span> Disarankan Ukuran Gambar 400x400.</small> -->
                                    </div>
                                </div>
                                <div class="form-group mt-2">
                                    <button type="submit" class="btn btn-success waves-effect waves-light pr-5 pl-5"><i class="mdi mdi-content-save"></i> Simpan</button>
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