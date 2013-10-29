<?php
/**
 * This file handles the retrieval and serving of news articles
 */
class Result_Controller
{
    /**
     * This template variable will hold the 'view' portion of our MVC for this 
     * controller
     */

    
    
    /**
     * This is the default function that will be called by router.php
     * 
     * @param array $getVars the GET variables posted to index.php
     */
    

    public function main(array $getVars)
    {
        //this is a test , and we will be removing it later
        print "We are in search result!";
        //echo $_POST["id"];
        $model = new Result_Model;

        isset($_GET['page_num']) ? $get = $_GET['page_num'] : $get=0;
        $start = $get*5;
        $end = $start+5;

        //buat hasil count
        $jumlah = $model->hitung($_POST['keyword']);
        $hasil = $model->search($_POST['keyword'],$start,$end);

        //generate jumlah halaman

        $c = 5;
        print_r($hasil);
        $jum_hal = ceil($jumlah["jml"]/$c);

        $view = new View_Model('result');
        $view->assign('hasil',$hasil);
        $view->assign('jum_hal_diview',$jum_hal);
    }

}