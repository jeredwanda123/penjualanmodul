<?= $this->extend('admin/layout/main'); ?>

<?= $this->section('content'); ?>
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">


                <?php if (session()->getFlashdata('success')): ?>
                    <input type="hidden" id="flashdata-success" value="<?= session()->getFlashdata('success'); ?>">
                <?php endif; ?>


                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title"><?= $judul; ?></h4>
                        <a href="prodi/create" class="btn btn-primary">Tambah</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Program_Studi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($prodi as $item) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $item['program_studi']; ?></td>
                                            <td>

                                                <a href="<?= site_url('prodi/edit/' . $item['id_prodi']) ?>" class="btn btn-warning btn-sm">Update</a>
                                                <button onclick="confirmDelete('prodi/delete/<?= $item['id_prodi']; ?>')" class="btn btn-danger btn-sm">Hapus</button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>