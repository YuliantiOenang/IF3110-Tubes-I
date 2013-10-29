<?php
/**
 * The News Model does the back-end heavy lifting for the News Controller
 */
class Profil_Model
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
    public function updatedata($username, $no_hp, $alamat, $provinsi, $kota, $kodepos, $email)
    {
        $this->db->connect();

        //prepare query
        $this->db->prepare
        (
            "
            UPDATE data_user
                SET no_handphone='$no_hp', alamat='$alamat', provinsi='$provinsi', kabupaten_kota='$kota', kodepos='$kodepos', email='$email'
            WHERE username='$username'
            ;
            "
        );

        //execute query
        $this->db->query();


    }
} 