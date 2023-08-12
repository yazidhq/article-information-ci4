<?php $this->extend('admin_template/template'); ?>

<?php $this->section('content'); ?>

<div class="container" style="margin-bottom: 5%;">
    <div class="text-center mt-5 mb-5">
        <h1><strong>Mading (Artikel yang Sudah Dibuat)</strong></h1>
    </div>
    <a href="/Admin/tambah_artikel" id="login" class="btn">+ Tambah Artikel</a>

    <div class="mt-3 mb-3">
        <form action="" method="post">
            <div class="form-outline">
                <input type="search" id="form1" name="keyword" class="form-control" placeholder="Masukkan pencarian artikel [ENTER]" aria-label="Search" />
            </div>
        </form>
    </div>

    <div>
        <h5 class="text-center"><strong>KOMENTAR AKTIF</strong></h5>
        <?php foreach ($aktif_komentar as $row) : ?>
            <div class="card mb-3">
                <h5 class="card-header bg" id="login"><a href="" class="text-decoration-none text-white"><strong><?= $row['artikel_judul'] ?></strong></a></h5>
                <div class="card-body">
                    <?php helper('text'); ?>
                    <p class="card-text"><?= character_limiter($row['artikel_isi'], 280) ?></p>

                    <a href="nonaktifkan_komentar/<?= $row['artikel_id'] ?>">[Nonaktifkan Komentar]</a>

                    <p><strong>Komentar Aktif</strong></p>

                    <a href="tampil_komentar/<?= $row['artikel_id'] ?>" class="btn btn-warning float-end">Lihat Komentar</a>
                    <a href="hapus_artikel/<?= $row['artikel_id'] ?>" class="btn btn-danger float-end" style="margin-right: 1%;" onclick="return confirm('Apakah anda yakin data ini ingin dihapus?')">Hapus Artikel</a>
                    <a href="detail_artikel/<?= $row['artikel_id'] ?>" class="btn btn-success float-end" style="margin-right: 1%;">Lihat Detail Artikel</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <hr>

    <div>
        <h5 class="text-center"><strong>KOMENTAR TIDAK AKTIF</strong></h5>
        <?php foreach ($nonaktif_komentar as $row) : ?>
            <div class="card mb-3">
                <h5 class="card-header bg" id="login"><a href="" class="text-decoration-none text-white"><strong><?= $row['artikel_judul'] ?></strong></a></h5>
                <div class="card-body">
                    <?php helper('text'); ?>
                    <p class="card-text"><?= character_limiter($row['artikel_isi'], 280) ?></p>

                    <a href="aktifkan_komentar/<?= $row['artikel_id'] ?>">[Aktifkan Komentar]</a>

                    <p><strong>Komentar Tidak Aktif</strong></p>

                    <a href="tampil_komentar/<?= $row['artikel_id'] ?>" class="btn btn-warning float-end">Lihat Komentar</a>
                    <a href="hapus_artikel/<?= $row['artikel_id'] ?>" class="btn btn-danger float-end" style="margin-right: 1%;" onclick="return confirm('Apakah anda yakin data ini ingin dihapus?')">Hapus Artikel</a>
                    <a href="detail_artikel/<?= $row['artikel_id'] ?>" class="btn btn-success float-end" style="margin-right: 1%;">Lihat Detail Artikel</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>

<?php $this->endSection(); ?>