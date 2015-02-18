<?php

/**
 * Display one or all of the quotes on file.
 * 
 * controllers/Viewer.php
 *
 * ------------------------------------------------------------------------
 */
class Admin extends Application {

    function __construct()
    {
	parent::__construct();
    }
    
    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------
    
    function index() {
        $this->data['pagebody'] = 'homepage';
        $this->render();
    }
}