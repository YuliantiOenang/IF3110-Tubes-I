<?php
/**
 * The News Model does the back-end heavy lifting for the News Controller
 */
class Login_Model
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
    public function cek_login($username, $password)
    {
        $this->db->connect();

        //prepare query
        $this->db->prepare
        (
            "
            SELECT 
                username
            FROM
                data_user
            WHERE
                username = '$username' AND password = '$password'
            ;
            "
        );

        //execute query
        $this->db->query();
        $data=array();
        while($row = $this->db->fetch("array")){
            $data[] = $row;
        }


        if (array_key_exists(0, $data)) {
            return $data[0]["username"];
        }else{
            return NULL;
        }

    }
} 