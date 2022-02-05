<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

    <div class="row">

        <div class="col-lg-10">

            <!-- Circle Buttons -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Product</h6>
                </div>
                <div class="card-body">

                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $product['id']; ?>">
                        <div class="form-group">
                            <label for="nama"><strong>Nama Produk</strong></label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Produk" value="<?= $product['nama']; ?>">
                            <?= form_error('nama', ' <small class="text-danger">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="keterangan"><strong>Keterangan Produk</strong></label>
                            <textarea class="form-control" name="keterangan" id="keterangan" cols="30" rows="3"><?= $product['keterangan']; ?></textarea>
                            <?= form_error('keterangan', ' <small class="text-danger">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="nohp"><strong>Nomor HP/WA</strong></label>
                            <input type="text" class="form-control" id="nohp" name="nohp" placeholder="Nomor HP/WA" value="<?= $product['kontak']; ?>">
                            <?= form_error('nohp', ' <small class="text-danger">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="gambar">Gambar Produk</label>

                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="<?= base_url('assets/produk/') . $product['gambar']; ?>" class="img-thumbnail">
                                </div>
                                <div class="col-sm-5 align-self-end">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                        <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                                    </div>
                                    <small class="form-text text-muted"><span class="text-danger">*</span> Disarankan Ukuran Gambar 400x400.</small>
                                </div>
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