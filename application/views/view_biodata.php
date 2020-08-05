<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Biodata <strong>berhasil!</strong> <?= $this->session->flashdata('flash'); ?>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= ($page['title'] ?? 'Undefined'); ?></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Lengkap</th>
                            <th>Spesialis</th>
                            <th>Website</th>
                            <th>Telepon</th>
                            <th>Asal</th>
                            <th>Umur</th>
                            <th>Pekerjaan</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($biodata as $b) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $b['nama']; ?></td>
                                <td><?= $b['spesialis']; ?></td>
                                <td><?= $b['website']; ?></td>
                                <td><?= $b['telepon']; ?></td>
                                <td><?= $b['asal']; ?></td>
                                <td><?= $b['umur']; ?></td>
                                <td><?= $b['pekerjaan']; ?></td>
                                <td><?= $b['deskripsi']; ?></td>
                                <td style="text-align: center;">
                                    <a href="<?= base_url(); ?>home/edit_biodata/<?= $b['biodata_id'] ?>" class="badge badge-pill badge-success">Edit</a>
                                    <a href="<?= base_url(); ?>home/hapus_biodata/<?= $b['biodata_id'] ?>" class="badge badge-pill badge-danger tombol-hapus">Delete</a>
                                </td>
                            </tr>
                    </tbody>
                    <?php $i++; ?>
                <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->