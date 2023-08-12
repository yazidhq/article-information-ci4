<?php $this->extend('admin_template/template'); ?>

<?php $this->section('content'); ?>

<div class="container">

    <div class="text-center mt-5 mb-5">
        <h1><strong><?= $detail['artikel_judul'] ?></strong></h1>
    </div>
    <p style="text-align:justify"><?= $detail['artikel_isi'] ?></p>

    <hr>

    <div class="d-flex justify-content-between">
        <a href="/Admin/tampil_komentar/<?= $detail['artikel_id'] ?>" class="text-decoration-none text-dark"><?= $total_komentar ?> komentar</a>
        <p class="text-decoration-none text-dark"><?= $detail['created_at'] ?></p>
    </div>

</div>

<?php $this->endSection(); ?>