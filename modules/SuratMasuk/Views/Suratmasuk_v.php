<?= $this->extend('Modules\AdminTemplate\Views\index'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <?php $session = session() ?>
    <h1 class="h3 mb-4 text-gray-800">Surat Masuk Dashboard</h1>

    <!-- Table data surat masuk -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Surat Masuk</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>No.Surat</th>
                            <th>Perihal</th>
                            <th>Asal Surat</th>
                            <th>Tgl Surat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Kode</th>
                            <th>No.Surat</th>
                            <th>Perihal</th>
                            <th>Asal Surat</th>
                            <th>Tgl Surat</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                      <?php foreach ($suratmasuk as $sm): ?>
                        <tr>
                            <td><?= $sm['id_suratmasuk']; ?></td>
                            <td><?= $sm['no_suratmasuk']; ?></td>
                            <td><?= $sm['perihal']; ?></td>
                            <td><?= $sm['pengirim']; ?></td>
                            <td><?= $sm['tgl_suratmasuk']; ?></td>
                            <td>
                              <a href="<?= base_url(); ?>/suratmasuk/create" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Tambah data">
                                <i class="fas fa-plus"></i>
                              </a>
                              <a href="<?= base_url(); ?>" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="bottom" title="Detail data">
                                <i class="fas fa-list"></i>
                              </a>
                              <a href="<?= base_url(); ?>" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="bottom" title="Edit data">
                                <i class="fas fa-edit"></i>
                              </a>
                              <a href="<?= base_url(); ?>" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Hapus data">
                                <i class="fas fa-trash"></i>
                              </a>
                            </td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>
