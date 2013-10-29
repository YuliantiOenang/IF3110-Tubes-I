<?php
/**
 * The News Model does the back-end heavy lifting for the News Controller
 */
class Registrasikartu_Model
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
    public function register($no_kartu, $nama_pemegang_kartu, $sementara)
    {
        $this->db->connect();

        //prepare query
        $this->db->prepare
        (
            "
            INSERT INTO
                data_kartu_kredit (no_kartu, nama_pemegang_kartu, expired_date)
            VALUES
               ('$no_kartu', '$nama_pemegang_kartu', '$sementara')
            ;
            "
        );

        //execute query
        $this->db->query();


    }
} 