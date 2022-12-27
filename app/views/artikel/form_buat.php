<div class="container-md">
    <div class="row mb-3">
        <div class="col-md-6 border-bottom border-primary border-2">
            <h3>FORM TAMBAH ARTIKEL</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <form action="<?= BASEURL . 'artikel/proses_buat' ?>" method="post">
                <div class="mb-3">
                    <label for="InputJudul" class="form-label">Judul Artikel</label>
                    <input type="text" class="form-control" id="InputJudul" name="judul_posting" required>
                </div>
                <div class="mb-3">
                    <label for="InputKategori" class="form-label">Kategori Artikel</label>
                    <select class="form-select js-select2" name="kategori[]" multiple="multiple">
                        <?php foreach ($data['kategori'] as $x => $y) : ?>
                            <option value="<?php echo $y["slug"]; ?>" data-badge=""><?php echo $y["nama"]; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>