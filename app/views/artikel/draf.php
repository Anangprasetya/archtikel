<h3>LIST SEMUA DRAF ARTIKEL</h3>
<hr>
<?php Message::getMessage(); ?>
<table border="2">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Judul</th>
            <th scope="col">Tanggal Buat</th>

            <th scope="col" colspan="4">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1;
        if ($data["artikel"] != null) :
            foreach ($data["artikel"] as $x) : ?>
                <tr>
                    <th scope="row"><?php echo $i++; ?></th>
                    <td><?php echo $x["judul_posting"]; ?></td>
                    <td><?php echo $x["tanggalBuat_posting"]; ?></td>

                    <td><a href="<?= BASEURL . 'artikel/view_konten/' . $x["slug_posting"]; ?>">Lihat Konten</a></td>
                    <td><a href="<?= BASEURL . 'artikel/edit_konten/' . $x["slug_posting"]; ?>">Edit Konten</a></td>
                    <td>
                        <form action="<?= BASEURL . 'artikel/delete_konten'; ?>" method="post">
                            <input type="hidden" name="slug" value="<?= $x["slug_posting"]; ?>">
                            <button type="submit" name="tbl_hps">Hapus</button>
                        </form>
                    </td>
                    <td>
                        <form action="<?= BASEURL . 'artikel/publish_konten'; ?>" method="post">
                            <input type="hidden" name="slug" value="<?= $x["slug_posting"]; ?>">
                            <button type="submit" name="tbl_pbsh">Publish</button>
                        </form>
                    </td>

                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="6">Kosong</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>