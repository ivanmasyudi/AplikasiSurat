<?= $this->extend('Modules\AdminTemplate\Views\index'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <?php $session = session() ?>
    <h1 class="h3 mb-4 text-gray-800">Admin Dashboard</h1>
    <?php echo $session->get('username') ?>
    <?= $session->get('level') ?>

</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>
