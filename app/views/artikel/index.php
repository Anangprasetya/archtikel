<div class="container-md">
    <div class="row mb-3 justify-content-center">
        <div class="col-md-6 border-bottom  border-dark border-3">
            <h3 class="text-center"><?php echo $data["jd"]; ?></h3>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-11">
            <?php Message::getTemplateMessage(); ?>
            <?php if ($data["artikel"] != null) : ?>
                <table class="table table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Tanggal Buat</th>
                            <th scope="col">Tanggal Posting</th>
                            <th scope="col">Jumlah Like</th>
                            <th scope="col" colspan="4" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($data["artikel"] as $x) : ?>
                            <tr>
                                <th scope="row"><?php echo $i++; ?></th>
                                <td><?php echo $x["judul_posting"]; ?></td>
                                <td><?php echo $x["tanggalBuat_posting"]; ?></td>

                                <?php if ($x["tanggalPublish_posting"] != null) : ?>
                                    <td><?php echo $x["tanggalPublish_posting"]; ?></td>
                                <?php else : ?>
                                    <td class="text-center">-</td>
                                <?php endif; ?>

                                <td><?php echo $x["jumlahLike_posting"]; ?></td>


                                <?php if ($x["tanggalPublish_posting"] != null) : ?>
                                    <td><a href="<?= BASEURL . 'publish/' . $x["slug_posting"]; ?>" class="btn btn-info">Lihat</a></td>
                                <?php else : ?>

                                    <td><a href="<?= BASEURL . 'artikel/view_konten/' . $x["slug_posting"]; ?>" class="btn btn-info">Lihat</a></td>
                                <?php endif; ?>

                                <td><a href="<?= BASEURL . 'artikel/edit_konten/' . $x["slug_posting"]; ?>" class="btn btn-warning">Edit</a></td>

                                <?php if ($x["tanggalPublish_posting"] != null) : ?>
                                    <td colspan="2" style="text-align:center">
                                        <form action="<?= BASEURL . 'artikel/delete_konten'; ?>" method="post">
                                            <input type="hidden" name="slug" value="<?= $x["slug_posting"]; ?>">
                                            <button type="submit" class="btn btn-danger" name="tbl_hps">Hapus</button>
                                        </form>
                                    </td>
                                <?php else : ?>
                                    <td>
                                        <form action="<?= BASEURL . 'artikel/delete_konten'; ?>" method="post">
                                            <input type="hidden" name="slug" value="<?= $x["slug_posting"]; ?>">
                                            <button type="submit" class="btn btn-danger" name="tbl_hps">Hapus</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="<?= BASEURL . 'artikel/publish_konten'; ?>" method="post">
                                            <input type="hidden" name="slug" value="<?= $x["slug_posting"]; ?>">
                                            <button type="submit" name="tbl_pbsh" class="btn btn-success">Publish</button>
                                        </form>
                                    </td>
                                <?php endif; ?>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else : ?>
                <p>Data Kosong</p>
            <?php endif; ?>
        </div>
    </div>
</div>