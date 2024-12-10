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
                            <form action="<?= site_url("kategori/update/{$kategori['kategori_id']}") ?>" method="post">
                                <?= csrf_field() ?>
                                <div class="form-group">
                                    <label for="nama_kategori">Nama Kategori</label>
                                    <input type="text" name="nama_kategori" class="form-control" id="nama_kategori" value="<?= old('nama_kategori', $kategori['nama_kategori']) ?>" required>
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