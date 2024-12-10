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
                            <form action="<?= site_url("modul/update/{$modul['modul_id']}") ?>" method="post">
                                <?= csrf_field() ?>
                                <div class="form-group">
                                    <label for="nama_modul">Nama Modul</label>
                                    <input type="text" name="nama_modul" class="form-control" id="nama_modul" value="<?= old('nama_modul', $modul['nama_modul']) ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="harga">harga</label>
                                    <input type="text" name="harga" class="form-control" id="harga" value="<?= old('harga', $modul['harga']) ?>" required>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="kategori-deskripsi">Kategori <span class="text-danger">*</span></label>
                                    <div class="col-lg-12">
                                        <select class="form-control" id="kategori_id" name="kategori_id">
                                            <option value="<?= old('kategori_id', $modul['kategori_id']) ?>" disabled selected>Pilih kategori</option>
                                            <?php foreach ($tbkategori as $key => $value) : ?>
                                                <option value="<?= ($value['kategori_id']); ?>">
                                                    <?= ($value['nama_kategori']); ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>



                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>