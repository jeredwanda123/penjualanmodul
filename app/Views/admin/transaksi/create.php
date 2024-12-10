<?= $this->extend('admin/layout/main'); ?>

<?= $this->section('content'); ?>
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <?php if (session()->getFlashdata('error')): ?>
                        <input type="hidden" id="flashdata-error" value="<?= session()->getFlashdata('error'); ?>">
                    <?php endif; ?>
                    <div class="card-header">
                        <h4 class="card-title">Tambah <?= $judul; ?></h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" action="kategori/store" method="post">
                                <div class="row">
                                    < class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="kategori-nama">Tanggal Transaksi <span class="text-danger">*</span></label>
                                            <div class="col-lg-12">
                                                <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" placeholder="Masukkan nama kategori.." />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="kategori-deskripsi">Total Harga <span class="text-danger">*</span></label>
                                            <div class="col-lg-12">
                                                <textarea class="form-control" id="deskripsi_kategori" name="deskripsi_kategori" rows="5" placeholder="Masukkan deskripsi kategori.."></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="kategori-deskripsi">Status Transaski <span class="text-danger">*</span></label>
                                            <div class="col-lg-12">
                                                <textarea class="form-control" id="deskripsi_kategori" name="deskripsi_kategori" rows="5" placeholder="Masukkan deskripsi kategori.."></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <button type="submit" class="btn btn-dark mb-2">Simpan</button>
                                                <button type="reset" class="btn btn-light">Reset</button>
                                            </div>
                                        </div>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?= $this->endSection(); ?>