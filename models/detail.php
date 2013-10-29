<?php
/**
 * The News Model does the back-end heavy lifting for the News Controller
 */
class Detail_Model
{
    /**
     * Array of articles. Array keys are titles, array values are corresponding
     * articles.
     */
    private $db;

    public function __construct(){
        $this->db = new MysqlImproved_Driver;
    }

    /**
     * Fetches article based on supplied name
     * 
     * @param string $articleName
     * 
     * @return array $article
     */
    public function detailnya($id_barang)
    {
        $this->db->connect();

        
        //prepare query
        $this->db->prepare
        (
            "
            SELECT
                *
            FROM
                `data_barang`
            WHERE
                id_barang='$id_barang'
            ;
            "
        );

        //execute query
        $this->db->query();

        
        // $rows[] = $this->db->fetch('array');
        
            $rows[] = $this->db->fetch('array');

        return $rows;        

    }

    public function decrement($id_barang, $qty) {
        $this->db->connect();

        
        //prepare query
        $this->db->prepare
        (
            "
            SELECT
                `stok`
            FROM `data_barang`
            WHERE id_barang='$id_barang'
            ;
            "
        );

        //execute query
        $this->db->query();

        
        // $rows[] = $this->db->fetch('array');
        
        $row = $this->db->fetch('array');

        if ($row[0]["stok"] < $qty) {
            return FALSE;
        }
        else
        {
            $row[0]["stok"] = $row[0]["stok"] - $qty;
            $new =$row[0]["stok"];
        }

        $this->db->prepare
        (
            "
            UPDATE 
                data_barang
            SET stok='$new'
            WHERE id_barang='$id_barang'
            ;
            "
        );

        //execute query
        $this->db->query();

    }
} 