<?php $this->extend('user_template/template'); ?>

<?php $this->section('content'); ?>

<div class="container" style="margin-bottom: 5%;">
    <div class="text-center mt-5 mb-5">
        <h1><strong>Mading</strong></h1>
    </div>

    <div class="mt-3 mb-3">
        <form action="" method="post">
            <div class="form-outline">
                <input type="search" id="form1" name="keyword" class="form-control" placeholder="Masukkan pencarian artikel [ENTER]" aria-label="Search" />
            </div>
        </form>
    </div>

    <div>
        <?php foreach ($artikel as $row) : ?>
            <div class="card mb-3">
                <h5 class="card-header bg" id="login"><a href="" class="text-decoration-none text-white"><strong><?= $row['artikel_judul'] ?></strong></a></h5>
                <div class="card-body">
                    <?php helper('text'); ?>
                    <p class="card-text"><?= character_limiter($row['artikel_isi'], 280) ?></p>
                    <a href="/User/detail_artikel/<?= $row['artikel_id'] ?>" class="btn btn-success float-end" style="margin-right: 1%;">Lihat Detail Artikel</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>

<?php $this->endSection(); ?>