<?php
/**
 * This file handles the retrieval and serving of news articles
 */
class Profil_Controller
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
        print "We are in profil pages!";
        

    }
}