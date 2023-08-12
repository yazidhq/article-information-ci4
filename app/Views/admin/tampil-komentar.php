<?php $this->extend('admin_template/template'); ?>

<?php $this->section('content'); ?>

<div class="text-center mt-5 mb-5">
    <h1 class="text-center mb-3" id="komentar"><strong>Komentar <?= $artikel['artikel_judul'] ?></strong></h1>
</div>

<div class="container" style="margin-bottom: 5%;">
    <?php foreach ($komentar as $row) : ?>
        <div class="card">
            <div class="card-header d-flex justify-content-between" style="background-color: #3b5998;">
                <p class="text-white" style=" margin-bottom: -0.1%;"><?= $row['komentar_email'] ?></p>
                <p class="text-white" style="margin-bottom: -0.1%;"><?= $row['created_at'] ?></p>
            </div>
            <div class=" card-body">
                <h5 class="card-title"><strong><?= $row['komentar_nama'] ?></strong></h5>
                <hr>
                <p class="card-text"><?= $row['komentar_isi'] ?></p>
                <a href="/Admin/hapus_komentar/<?= $row['komentar_id'] ?>" class="text-muted float-end" style="margin-bottom:-0.5%" onclick="return confirm('Apakah anda yakin data ini ingin dihapus?')"><button class="btn btn-danger">Hapus Komentar</button></a>
            </div>
        </div><br>
    <?php endforeach; ?>
</div>

<?php $this->endSection(); ?>