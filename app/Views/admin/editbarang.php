<?= $this->extend('layoutadmin/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <a href="/admin/tambahbarang" class="btn btn-success mt-3">Tambah Barang</a>
            <h1 class="mt-4">Cart</h1>

            <table class="table table-hover m-3 mb-5 text-center">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Gambar Barang</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Harga Barang (Rp)</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody class="justify-content-center align-item-center">
                    <?php $i = 1; ?>
                    <?php foreach ($kue as $kuee) : ?>
                        <tr class="align-item-center">
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
                            <td>
                                <a href="/pages/keranjang" class="btn btn-primary">Edit</a>
                                <a href="/pages/keranjang" class="btn btn-danger">Hapus</a>

                            </td>
                        <?php endforeach; ?>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>