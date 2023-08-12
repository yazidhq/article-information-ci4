<?php $this->extend('admin_template/template'); ?>

<?php $this->section('content'); ?>

<div class="position-absolute top-50 start-50 translate-middle text-center">
    <h3>Halo, <?= session()->get('admin_name') ?></h3>
    <h1 style="color:#3b5998"><strong>Selamat Datang di Halaman Admin</strong></h1>
    <h2>Silahkan dikelola dengan baik ya..</h2>
</div>

<?php $this->endSection(); ?>