<?php

class Tests extends CI_Controller{

    public function __construct() {
        parent::__construct();
    }
    
    public function layout1(){
        $this->layout->navTitle='Latest Features';
        $this->layout->render();
    }
    public function layout2(){
        $this->layout->layout='respond';
        $this->layout->layoutsFolder='layout/respond';
        
        $this->layout->navTitle='Latest Features';
        $this->layout->render();
    }
}