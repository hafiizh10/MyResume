<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <script type="text/javascript">
        var JenisLists = new Array(4)
        JenisLists[""] = [""];
        JenisLists["Certificate"] = ["filter-app"];
        JenisLists["Seminar"] = ["filter-card"];
        JenisLists["Portfolio"] = ["filter-web"];

        function jenisChange(selectObj) {
            var idx = selectObj.selectedIndex;
            var which = selectObj.options[idx].value;
            cList = JenisLists[which];
            var cSelect = document.getElementById("filter");
            var len = cSelect.options.length;
            while (cSelect.options.length > 0) {
                cSelect.remove(0);
            }
            var newOption;
            for (var i = 0; i < cList.length; i++) {
                newOption = document.createElement("option");
                newOption.value = cList[i];
                newOption.text = cList[i];
                try {
                    cSelect.add(newOption);
                } catch (e) {
                    cSelect.appendChild(newOption);
                }
            }
        }
    </script>

    <div class="row mt-3">
        <div class="col-md-6">
            <?php if ($this->session->flashdata('flash')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Portfolio <strong>berhasil!</strong> <?= $this->session->flashdata('flash'); ?>.
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
                            <label for="judul">Judul Portfolio</label>
                            <input type="text" class="form-control" name="judul" id="judul" required>
                            <?= form_error('judul') ?>
                        </div>
                        <div class="form-group">
                            <label for="link">Link Gambar</label>
                            <input type="text" class="form-control" name="link" id="link">
                            <?= form_error('link') ?>
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis Portfolio</label>
                            <select class="custom-select" name="jenis" id="jenis" onchange="jenisChange(this);">
                                <option selected>Pilih</option>
                                <option value="Certificate">Certificate</option>
                                <option value="Seminar">Seminar</option>
                                <option value="Portfolio">Portfolio</option>
                            </select>
                        </div>
                        <div class="form-group" hidden>
                            <label for="filter">Filter Portfolio</label>
                            <select class="custom-select" id="filter" name="filter">
                                <option value="0">Pilihan Filter</option>
                            </select>
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