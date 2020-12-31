<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h3 class="mt-3 text-gray-900">Daftar Kue</h3>
            <table class="ml-2 table">
                <thead>
                    <tr class="mb-4 text-gray-900">
                        <th scope="col">No.</th>
                        <th scope="col">Gambar Barang</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Harga Barang</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($kue as $kuee) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?>
                            </th>
                            <td>
                                <img src="/img/<?= $kuee['gambar']; ?>" alt="" class="gambar">
                            </td>
                            <td>
                                <?= $kuee['nama']; ?>
                            </td>
                            <td>
                                <?= $kuee['harga']; ?>
                            </td>
                            <td><a href="/barang/<?= $kuee['slug']; ?>" class="btn btn-success">Detail</a>
                                <a href="/pages/keranjang" class="btn btn-primary">Masuk Keranjang</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>