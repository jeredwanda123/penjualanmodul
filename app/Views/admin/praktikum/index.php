<?= $this->extend('layout/main'); ?> <!-- Pastikan ini sesuai dengan file main.php di root folder Views -->
<?= $this->section('content'); ?>
<div class="page-inner">
    <div class="page-header">
        <h3 class="fw-bold mb-3">DataTables.Net</h3>
        <ul class="breadcrumbs mb-3">
            <li class="nav-home">
                <a href="#">
                    <i class="icon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="icon-arrow-right"></i>
            </li>
            <li class="nav-item">
                <a href="#">Tables</a>
            </li>
            <li class="separator">
                <i class="icon-arrow-right"></i>
            </li>
            <li class="nav-item">
                <a href="#">Datatables</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Basic</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table
                            id="basic-datatables"
                            class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>?No</th>
                                    <th>nama_modul</th>
                                    <th>harga</th>
                                    <th>stok</th>
                                    <th>deskripsi</th>
                                    <th>kategori_modul</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($praktikum as $key => $value) : ?>
                                    <tr>
                                        <th>
                                            <?= $value['modul_id'] ?>
                                        </th>
                                        <th>
                                            <?= $value['nama_modul'] ?>
                                        </th>
                                        <th>
                                            <?= $value['harga'] ?>
                                        </th>
                                        <th>
                                            <?= $value['stok'] ?>
                                        </th>
                                        <th>
                                            <?= $value['deskripsi'] ?>
                                        </th>
                                        <th>
                                            <?= $value['kategori_modul'] ?>
                                        </th>
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
<?= $this->endSection(); ?>