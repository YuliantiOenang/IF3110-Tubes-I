<?php
/**
 * This file handles the retrieval and serving of news articles
 */
class Registrasikartu_Controller
{
    /**
     * This template variable will hold the 'view' portion of our MVC for this 
     * controller
     */
    public $template = 'news';
    
    /**
     * This is the default function that will be called by router.php
     * 
     * @param array $getVars the GET variables posted to index.php
     */
    public function main(array $getVars)
    {

        //this is a test , and we will be removing it later
        

        // print "We are in registrasi!";
        
        // $registrasi_model = New Registrasikartu_Model;

        // $result = $registrasi_model->check_registered($getVars['uname']);
        // print_r( count($result[0]));

        $view = new View_Model("registrasikartu");
        
    }

    public function daftar(array $getVars){

        foreach ($_POST as $key => $value) {
            echo $value;
        }

        $model = new Registrasikartu_model;

        $sementara = $_POST["expired_date_month"] . " " . $_POST["expired_date_year"];

        $model->register($_POST["no_kartu"],$_POST["nama_pemegang_kartu"], $sementara);
        
    }
}