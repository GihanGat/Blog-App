<?php

class Main extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    /*
     * http://localhost/
     */
    function Index () {

        $this->view("template/header");
        $this->view("main/index");
        $this->view("template/footer");
        
    }

    function Other () {

        $this->view("template/header");
        $this->view("main/other");
        $this->view("template/footer");
        
    }

    function Articles () {

        $this->view("template/header");
        $this->view("template/navbar");
        $this->view("main/articles");
        $this->view("template/footer");
        
    }


    function Home () {
        $this->view("template/header");
        $this->view("template/navbar");
        $this->view("main/home");
        $this->view("template/footer");
        
    }

    function Contact () {

        $this->view("template/header");
        $this->view("template/navbar");
        $this->view("main/contact");
        $this->view("template/footer");
        
    }


    function About () {
        $this->view("template/header");
        $this->view("template/navbar");
        $this->view("main/about");
        $this->view("template/footer");
        
    }
}

?>