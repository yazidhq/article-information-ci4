<?php $this->extend('user_template/template'); ?>

<?php $this->section('content'); ?>

<div class="container" style="margin-bottom: 7%;">

    <div class="text-center mt-5 mb-5">
        <h1><strong><?= $artikel['artikel_judul'] ?></strong></h1>
    </div>
    <p style="text-align:justify"><?= $artikel['artikel_isi'] ?></p>

    <hr>

    <div class="d-flex justify-content-between">
        <p><a href="#komentar" class="text-decoration-none text-dark"><?= $total_komentar ?> komentar</a></p>
        <p><?= $artikel['created_at'] ?></p>
    </div>

    <?php if ($artikel['status_komentar'] == 1) : ?>
        <form action="/User/tambah_komentar" method="post">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center"><strong>Berikan Komentar</strong></h4>
                    <input type="hidden" id="artikel_id" name="artikel_id" value="<?= intval($artikel['artikel_id']) ?>">
                    <div class="col-12 mb-4">
                        <label for="inputAddress" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="komentar_nama">
                    </div>
                    <div class="col-12 mb-4">
                        <label for="inputAddress2" class="form-label">Email</label>
                        <input type="text" class="form-control" name="komentar_email">
                    </div>
                    <div class="col-12 mb-4">
                        <label for="inputAddress2" class="form-label">Komentar</label>
                        <textarea type="text" class="form-control" name="komentar_isi"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn" id="login" name="komentar">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    <?php else : ?>
        <h5 class="text-center"><strong>- [Memberi Komentar Dinonaktifkan] -</strong></h5>
    <?php endif; ?>
    <hr>

    <h4 class="text-center mb-3" id="komentar"><strong>Komentar</strong></h4>
    <?php foreach ($komentar as $row) : ?>
        <div class="card">
            <div class="card-header text-white" style="background-color: #3b5998;">
                <?= $row['komentar_email'] ?>
            </div>
            <div class="card-body">
                <h5 class="card-title"><strong><?= $row['komentar_nama'] ?></strong></h5>
                <hr>
                <p class="card-text"><?= $row['komentar_isi'] ?></p>
                <p class="text-muted float-end" style="margin-bottom:-0.5%"><?= $row['created_at'] ?></p>
            </div>
        </div><br>
    <?php endforeach; ?>

</div>

<?php $this->endSection(); ?>