<?php
/**
 * The News Model does the back-end heavy lifting for the News Controller
 */
class Registrasi_Model
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
    public function check_registered($username)
    {
        $this->db->connect();

        
        //prepare query
        $this->db->prepare
        (
            "
            SELECT
                username
            FROM
                `data_user`
            LIMIT
                1
            ;
            "
        );

        //execute query
        $this->db->query();

        
        $rows[] = $this->db->fetch('array');
        


        return $rows;        

    }

    public function registrasi($username,$password,$nama_lengkap,$email){
        $this->db->connect();

        //prepare query
        $this->db->prepare
        (
            "
            INSERT INTO
                data_user
                (username,password,nama_lengkap,email)
            VALUES
                ('$username','$password','$nama_lengkap','$email')
            ;
            "
        );

        //execute query
        $this->db->query();        
    }
} 