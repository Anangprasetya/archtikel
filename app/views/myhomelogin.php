<div class="container-md">
    <div class="row">
        <div class="col-md-6">
            <?php Message::getMessage(); ?>
            <h4>Selamat Datang <?php echo $_SESSION["user_login"]["nama"]; ?></h4>
        </div>
        <table>
                <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Tanggal Upload</th>
                    <th>Edit</th>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Cara Berenang</td>
                    <td>13/01/2022</td>
                    <td><a href="">Update</a> | <a href="">Delete</a></td>
                </tr>
            </table>
    </div>
</div>