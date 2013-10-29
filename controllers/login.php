<?php
/**
 * This file handles the retrieval and serving of news articles
 */
class Login_Controller
{
    /**
     * This template variable will hold the 'view' portion of our MVC for this 
     * controller
     */
    public $template = 'login';
    private $model;
    /**
     * This is the default function that will be called by router.php
     * 
     * @param array $getVars the GET variables posted to index.php
     */

    public function __construct(){
        $this->model = new Login_Model;
    }

    public function main(array $getVars)
    {
        
            
        $view = new View_Model($this->template);
        //assign article data to view
        

    }

    public function cek_login(){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $status=$this->model->cek_login($username,$password);
        // print_r($status);
        header('Location: http://localhost/waserda/index.php?registrasi');

    }
}