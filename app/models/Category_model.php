<?php
class Category_model
{
    private $table = 'category';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function get()
    {
        $query = "SELECT * FROM $this->table";
        $this->db->query($query);
        $x = $this->db->execute();

        $arr = array();

        if ($x->num_rows > 0) {
            $idx = 0;
            while ($y = $x->fetch_assoc()) {
                $arr[$idx] = $y;
                $idx++;
            }

            return $arr;
        }
    }

    public function getAll()
    {
        $sql = "SELECT * FROM category";
        $this->db->query($sql);
        $result = $this->db->execute();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }
    }

    public function getFindbyArtikel($var)
    {
        $sql = "SELECT * FROM posting_category LEFT JOIN $this->table ON $this->table.id_category = posting_category.id_category LEFT JOIN posting ON posting.id_posting = posting_category.id_posting WHERE posting_category.id_posting='$var'";
        $this->db->query($sql);
        $result = $this->db->execute();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }

        return null;
    }
}
