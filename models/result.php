<?php
/**
 * The News Model does the back-end heavy lifting for the News Controller
 */
class Result_Model
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
    public function search($keyword,$start = "0", $end = "5")
    {
        $this->db->connect();

        
        //prepare query
        $this->db->prepare
        (
            "
            select * from `data_barang` where nama like '%$keyword%'
            ;
            "
        );

        //execute query
        $this->db->query();

        
        // $rows[] = $this->db->fetch('array');
        $rows=array();
        while($hasil = $this->db->fetch('array')){
            $rows[] = $hasil;
        }
        echo "halo";
        return $rows;        

    }

    public function hitung($keyword) {
        $this->db->connect();

        
        //prepare query
        $this->db->prepare
        (
            "
            SELECT COUNT(*) as jml FROM `data_barang` WHERE nama LIKE '%$keyword%';
            "
        );

        //execute query
        $this->db->query();


        $hsl=$this->db->fetch("array");
        return $hsl;
    }
} 