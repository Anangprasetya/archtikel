<h3>EDIT ARTIKEL <?php echo $data["artikel"]["judul_posting"]; ?></h3>
<hr>
<form action="<?= BASEURL . 'artikel/proses_edit_konten' ?>" method="post">
    <button type="submit">Simpan</button>
    <br><br>
    <input type="hidden" name="id" value="<?= $data["artikel"]["slug_posting"]; ?>">
    <textarea name="isikonten" id="editor" cols="30" rows="10">
        <?php echo $data["artikel"]["isi_posting"];
        ?>
    </textarea>
</form>

<script src="<?= BASEURL . 'js/editor/ckeditor.js' ?>"></script>

<script>
    // Replace the <textarea id="editor1"> with a CKEditor 4
    // instance, using default configuration.
    CKEDITOR.replace('editor');
</script>