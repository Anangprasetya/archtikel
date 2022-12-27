<div class="container-md">
    <div class="row mb-3">
        <div class="col-md-6 border-bottom border-primary border-2">
            <h3>EDIT ARTIKEL <?php echo $data["artikel"]["judul_posting"]; ?></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="<?= BASEURL . 'artikel/proses_edit_konten' ?>" method="post">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <input type="hidden" name="id" value="<?= $data["artikel"]["slug_posting"]; ?>">
                <div class="mt-3">
                    <textarea name="isikonten" id="editor" cols="30" rows="10">
                        <?php echo $data["artikel"]["isi_posting"];
                        ?>
                    </textarea>
                </div>
            </form>
        </div>
    </div>
</div>



<script src="<?= BASEURL ?>editor/ckeditor.js"></script>

<script>
    // Replace the <textarea id="editor1"> with a CKEditor 4
    // instance, using default configuration.
    CKEDITOR.replace('editor');
</script>