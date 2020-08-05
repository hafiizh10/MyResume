<!-- Begin Page Content -->
<div class="container-fluid">

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
            <div class="card">
                <div class="card-header">
                    <?= ($page['title'] ?? 'Undefined'); ?>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $portfolio['resume_id'] ?>">
                        <div class="form-group">
                            <label for="judul">Judul Portfolio</label>
                            <input type="text" class="form-control" name="judul" id="judul" value="<?= $portfolio['judul'] ?>">
                            <?= form_error('judul') ?>
                        </div>
                        <div class="form-group">
                            <label for="link">Link Gambar</label>
                            <input type="text" class="form-control" name="link" id="link" value="<?= $portfolio['link'] ?>">
                            <?= form_error('link') ?>
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis Portfolio</label>
                            <select class="custom-select" id="jenis" name="jenis" onchange="jenisChange(this);">
                                <option selected>Pilihan</option>
                                <?php foreach ($jenis as $j) : ?>
                                    <?php if ($j == $portfolio['jenis']) : ?>
                                        <option value="<?= $j; ?>" selected><?= $j ?></option>
                                    <?php else : ?>
                                        <option value="<?= $j; ?>"><?= $j ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group" hidden>
                            <label for="filter">Filter Portfolio</label>
                            <select class="custom-select" id="filter" name="filter">
                                <option value="0">Pilihan Filter</option>
                            </select>
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