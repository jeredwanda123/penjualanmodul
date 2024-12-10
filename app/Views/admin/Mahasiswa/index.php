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
                        <a href="mahasiswa/create" class="btn btn-primary">Tambah</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Mahasiswa</th>
                                        <th>Npm </th>
                                        <th>Semester</th>
                                        <th>Alamat</th>
                                        <th>Telepon</th>
                                        <!-- <th>Id_user</th>
                                        <th>Id_prodi</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($mahasiswa as $item) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $item['nama']; ?></td>
                                            <td><?= $item['npm']; ?></td>
                                            <td><?= $item['semester']; ?></td>
                                            <td><?= $item['alamat']; ?></td>
                                            <td><?= $item['telepon']; ?></td>

                                            <td>

                                                <a href="<?= site_url('mahasiswa/edit/' . $item['id_mahasiswa']) ?>" class="btn btn-warning btn-sm">Update</a>
                                                <button onclick="confirmDelete('mahasiswa/delete/<?= $item['id_mahasiswa']; ?>')" class="btn btn-danger btn-sm">Hapus</button>
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