<?php $this->extend('admin_template/template'); ?>

<?php $this->section('content'); ?>

<div class="container mt-5">
    <div class="text-center mb-5">
        <h1><strong>Tambah Artikel</strong></h1>
    </div>
    <form action="proses_tambah" method="post">
        <div class="card position-absolute top-50 start-50 translate-middle" style="width: 40rem;margin-top:3%">
            <div class="card-body">
                <div class="col-12 mb-4">
                    <label for="inputAddress" class="form-label">Judul Artikel</label>
                    <input type="text" class="form-control" placeholder="Buat judul artikel.." name="artikel_judul">
                </div>
                <div class="col-12 mb-4">
                    <label for="inputAddress2" class="form-label">Status Komentar</label>
                    <select name="status_komentar" class="form-control text-muted">
                        <option hidden>--- Pilih Opsi ---</option>
                        <option value="<?= intval('1') ?>">Komentar Aktif</option>
                        <option value="<?= intval('0') ?>">Komentar Nonaktif</option>
                    </select>
                </div>
                <div class="col-12 mb-4">
                    <label for="inputAddress2" class="form-label">Isi Artikel</label>
                    <textarea type="text" class="form-control" placeholder="Masukkan isi artikel.." name="artikel_isi" style="height: 300px;"></textarea>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn" id="login" name="tambah">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>

<?php $this->endSection(); ?>