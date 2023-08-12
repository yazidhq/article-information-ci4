<?php $this->extend('admin_template/template'); ?>

<?php $this->section('content'); ?>

<div class="text-center">
    <div class="mt-5 mb-5">
        <h1><strong>Laporan (Total Artikel dan Komentar)</strong></h1>
    </div>
    <div class="d-flex justify-content-center">
        <div class="col-3">
            <div class="card text-bg-light">
                <div class="card-header text-white" style="background-color: #3b5998;">Total Artikel</div>
                <div class="card-body">
                    <h1 href="mading.php" class="text-center display-1"><strong><?= $artikel ?></strong></h1>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card text-bg-light">
                <div class="card-header text-white" style="background-color: #3b5998;">Total Komentar</div>
                <div class="card-body">
                    <h1 href="komentar.php" class="text-center display-1"><strong><?= $komentar ?></strong></h1>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>