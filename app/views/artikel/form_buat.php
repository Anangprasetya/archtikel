<h3>FORM TAMBAH ARTIKEL</h3>
<hr>
<form action="<?= BASEURL . 'artikel/proses_buat' ?>" method="post">
    <label for="">Judul Artikel</label>
    <input type="text" name="judul_posting" required> <br>
    <br>
    <label for="">Kategori Artikel</label> <br>

    <select id="kategori" name="kategori[]" multiple="multiple" style="width:300px">
        <?php foreach ($data['kategori'] as $x => $y) : ?>
            <option value="<?php echo $y["slug"]; ?>"><?php echo $y["nama"]; ?></option>
        <?php endforeach; ?>
    </select>
    <br> <br>
    <button type="submit">Tambah</button>
</form>