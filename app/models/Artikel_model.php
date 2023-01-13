<?php

class Artikel_model
{
    private $table = 'posting';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAll($id_user = null)
    {
        $query = "";
        if ($id_user == null) {
            $query = "SELECT * FROM $this->table";
        } else {
            $id_user = "'" . $id_user . "'";
            $query = "SELECT * FROM $this->table WHERE id_users = $id_user";
        }

        $this->db->query($query);
        $x = $this->db->execute();

        if ($x->num_rows > 0) {
            $tmp = array();
            $idx = 0;
            while ($row = $x->fetch_assoc()) {
                $tmp[$idx] = $row;
                $idx++;
            }

            return $tmp;
        } else {
            return null;
        }
    }

    public function getDraf($id_user)
    {
        $id_user = "'" . $id_user . "'";
        $query = "SELECT * FROM $this->table WHERE tanggalPublish_posting IS NULL AND id_users=$id_user";

        $this->db->query($query);
        $x = $this->db->execute();

        if ($x->num_rows > 0) {
            return $x->fetch_all(MYSQLI_ASSOC);
        }
        return null;
    }

    public function getPosting($id_user)
    {
        $id_user = "'" . $id_user . "'";
        $query = "SELECT * FROM $this->table WHERE tanggalPublish_posting IS NOT NULL AND id_users=$id_user";

        $this->db->query($query);
        $x = $this->db->execute();

        if ($x->num_rows > 0) {
            return $x->fetch_all(MYSQLI_ASSOC);
        }
        return null;
    }

    public function getPostingAll()
    {
        $query = "SELECT * FROM $this->table WHERE tanggalPublish_posting IS NOT NULL";

        $this->db->query($query);
        $x = $this->db->execute();

        if ($x->num_rows > 0) {
            return $x->fetch_all(MYSQLI_ASSOC);
        }
        return null;
    }

    public function updateKonten($data)
    {
        $isi = "'" . $data["isikonten"] . "'";
        $slug = "'" . $data["id"] . "'";
        $sql = "UPDATE $this->table SET isi_posting=$isi WHERE slug_posting=$slug";
        $this->db->query($sql);

        if ($this->db->execute() === TRUE) {
            return true;
        }
        return false;
    }

    public function getFindArtikel($slug)
    {
        $slug = "'" . $slug . "'";
        $query = "SELECT * FROM $this->table WHERE slug_posting=$slug";
        $this->db->query($query);
        $x = $this->db->execute();

        if ($x->num_rows > 0) {
            return $x->fetch_assoc();
        }
        return false;
    }

    public function insert($data)
    {
        $judul = "'" . $data["judul_posting"] . "'";
        $slugjudul = $this->db->textToSlug($judul) . "-" . uniqid();
        $slugjudul = "'" . $slugjudul . "'";

        $kategori = $data["kategori"];

        $user = "'" . $_SESSION["user_login"]["username"] . "'";

        $sql = "SELECT id_user FROM users WHERE username=$user";
        $this->db->query($sql);
        $x = $this->db->execute();

        if ($x->num_rows > 0) {
            $row = $x->fetch_assoc();
            $iduser = "'" . $row["id_user"] . "'";
            $dsekarang = date("Y-m-d H:i:s");
            $dsekarang = "'" . $dsekarang . "'";

            $sql = "INSERT INTO $this->table 
            (id_users, judul_posting, slug_posting, tanggalBuat_posting)
            VALUES ($iduser, $judul, $slugjudul, $dsekarang)";

            $this->db->query($sql);
            $this->db->execute();
        }

        $sql = "SELECT id_posting FROM $this->table WHERE slug_posting=$slugjudul";
        $this->db->query($sql);
        $x = $this->db->execute();

        if ($x->num_rows > 0) {
            $row = $x->fetch_assoc();
            $row = $row["id_posting"];


            foreach ($kategori as $ka) {
                $id_slug = $this->getCategoryBySlug($ka)["id_category"];
                $this->insertRelasiPostingKategori($row, $id_slug);
            }
        }

        return true;
    }

    public function getCategoryBySlug($s)
    {
        $s = "'" . $s . "'";

        $query = "SELECT * FROM category WHERE slug=$s";
        $this->db->query($query);
        $x = $this->db->execute();

        if ($x->num_rows > 0) {
            $y = $x->fetch_assoc();
            return $y;
        }
        return false;
    }

    public function insertRelasiPostingKategori($idpost, $idkategori)
    {
        $idpost = "'" . $idpost . "'";
        $idkategori = "'" . $idkategori . "'";
        $query = "INSERT INTO posting_category VALUES ($idpost, $idkategori)";
        $this->db->query($query);
        $this->db->execute();
    }

    public function deleteKonten($s)
    {
        $s = "'" . $s . "'";

        $query = "DELETE FROM $this->table WHERE slug_posting=$s";
        $this->db->query($query);
        $x = $this->db->execute();

        if ($x === TRUE) {
            return true;
        }
        return false;
    }

    public function publishKonten($s)
    {
        $s = "'" . $s . "'";
        $dsekarang = date("Y-m-d H:i:s");
        $dsekarang = "'" . $dsekarang . "'";

        $query = "UPDATE $this->table SET tanggalPublish_posting = $dsekarang WHERE slug_posting=$s";
        $this->db->query($query);
        $x = $this->db->execute();

        if ($x === TRUE) {
            return true;
        }
        return false;
    }
}
