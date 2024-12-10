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
                            <form class="form-valide" action="/mahasiswa/store" method="post">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="mahasiswa-nama">Npm<span class="text-danger">*</span></label>
                                            <div class="col-lg-12">
                                                <input type="text" class="form-control" id="npm" name="npm" placeholder="Masukkan NPM.." />
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="mahasiswa-alamat">Semester <span class="text-danger">*</span></label>
                                            <div class="col-lg-12">
                                                <input type="text" class="form-control" id="semester" name="semester" rows="5" placeholder="Masukkan semester.."></>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="telepon">Nama<span class="text-danger">*</span></label>
                                            <div class="col-lg-12">
                                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama lengkap.." />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="telepon">Alamat<span class="text-danger">*</span></label>
                                            <div class="col-lg-12">
                                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat.." />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="telepon">Telepon<span class="text-danger">*</span></label>
                                            <div class="col-lg-12">
                                                <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Masukkan Telepon.." />
                                            </div>
                                        </div>
                                        <!-- <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="telepon">Id_user<span class="text-danger">*</span></label>
                                            <div class="col-lg-12">
                                                <input type="text" class="form-control" id="id_user" name="id_user" placeholder="Masukkan nama pengguna.." />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="telepon">Id_prodi<span class="text-danger">*</span></label>
                                            <div class="col-lg-12">
                                                <input type="text" class="form-control" id="id_prodi" name="id_prodi" placeholder="Masukkan Program Studi.." />
                                            </div> -->
                                        <!-- </div> -->
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