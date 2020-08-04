<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Portfolio <strong>berhasil!</strong> <?= $this->session->flashdata('flash'); ?>.
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
                            <th>Jenis Portfolio</th>
                            <th>Judul Portfolio</th>
                            <th>Link Gambar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($portfolio as $pf) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $pf['jenis']; ?></td>
                                <td><?= $pf['judul']; ?></td>
                                <td><?= $pf['link']; ?></td>
                                <td style="text-align: center;">
                                    <a href="<?= base_url(); ?>home/edit/<?= $pf['resume_id'] ?>" class="badge badge-pill badge-success">Edit</a>
                                    <a href="<?= base_url(); ?>home/hapus/<?= $pf['resume_id'] ?>" class="badge badge-pill badge-danger tombol-hapus">Delete</a>
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