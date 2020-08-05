<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="row mt-3">
        <div class="col-md-6">
            <?php if ($this->session->flashdata('flash')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Biodata <strong>berhasil!</strong> <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <div class="card">
                <div class="card-header">
                    <?= ($page['title'] ?? 'Undefined'); ?>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="id" id="id" value="<?= $user['id'] ?>" readonly required>
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" id="nama" required>
                            <?= form_error('nama') ?>
                        </div>
                        <div class="form-group">
                            <label for="spesialis">Spesialis Anda</label>
                            <input type="text" class="form-control" name="spesialis" id="spesialis" placeholder="Web Developer, Web Designer" required>
                            <?= form_error('spesialis') ?>
                        </div>
                        <div class="form-group">
                            <label for="website">Website Anda</label>
                            <input type="text" class="form-control" name="website" id="website" required>
                            <?= form_error('website') ?>
                        </div>
                        <div class="form-group">
                            <label for="telepon">Telepon / WA</label>
                            <input type="text" class="form-control" name="telepon" id="telepon" required>
                            <?= form_error('telepon') ?>
                        </div>
                        <div class="form-group">
                            <label for="asal">Asal Alamat</label>
                            <input type="text" class="form-control" name="asal" id="asal" required>
                            <?= form_error('asal') ?>
                        </div>
                        <div class="form-group">
                            <label for="umur">Umur</label>
                            <input type="text" class="form-control" name="umur" id="umur" required>
                            <?= form_error('umur') ?>
                        </div>
                        <div class="form-group">
                            <label for="pekerjaan">Pekerjaan</label>
                            <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" required>
                            <?= form_error('pekerjaan') ?>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi Tentang Anda</label>
                            <textarea type="text" class="form-control" name="deskripsi" id="deskripsi" required></textarea>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->