<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail Kue</h2>
            <div class="card mt-4 mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/<? echo $kuee['gambar']; ?>" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Bolu Gulung</h5>
                            <p class="card-text"><small class="text-muted ">Harga Satuan</small></p>
                            <p class="card-text">Rp.38.000</p>
                            <p class="card-text">Bolu Gulung dengan rasa isian nanas yang akan memberikan hari mu semakin manis</p>
                            <a href="" class="btn btn-success">Tambah</a>
                            <a href="" class="btn btn-warning">Kembali ke Daftar Kue</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>