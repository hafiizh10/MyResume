<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <?= ($page['title'] ?? 'Undefined'); ?>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $biodata['biodata_id'] ?>">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" id="nama" value="<?= $biodata['nama'] ?>">
                            <?= form_error('nama') ?>
                        </div>
                        <div class="form-group">
                            <label for="spesialis">Spesialis Anda</label>
                            <input type="text" class="form-control" name="spesialis" id="spesialis" value="<?= $biodata['spesialis'] ?>">
                            <?= form_error('spesialis') ?>
                        </div>
                        <div class="form-group">
                            <label for="website">Website Anda</label>
                            <input type="text" class="form-control" name="website" id="website" value="<?= $biodata['website'] ?>">
                            <?= form_error('website') ?>
                        </div>
                        <div class="form-group">
                            <label for="telepon">Telepon / WA</label>
                            <input type="text" class="form-control" name="telepon" id="telepon" value="<?= $biodata['telepon'] ?>">
                            <?= form_error('telepon') ?>
                        </div>
                        <div class="form-group">
                            <label for="asal">Asal Alamat</label>
                            <input type="text" class="form-control" name="asal" id="asal" value="<?= $biodata['asal'] ?>">
                            <?= form_error('asal') ?>
                        </div>
                        <div class="form-group">
                            <label for="umur">Umur</label>
                            <input type="text" class="form-control" name="umur" id="umur" value="<?= $biodata['umur'] ?>">
                            <?= form_error('umur') ?>
                        </div>
                        <div class="form-group">
                            <label for="pekerjaan">Pekerjaan</label>
                            <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" value="<?= $biodata['pekerjaan'] ?>">
                            <?= form_error('pekerjaan') ?>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi Tentang Anda</label>
                            <textarea type="text" class="form-control" name="deskripsi" id="deskripsi"><?= $biodata['deskripsi'] ?></textarea>
                        </div>
                        <button type="submit" name="edit" class="btn btn-primary float-right">Edit Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->