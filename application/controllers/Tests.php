<?php

class Tests extends CI_Controller{

    public function __construct() {
        parent::__construct();
    }
    
    public function layout1(){
        $this->layout->navTitle='Latest Features';
        $this->scripts_include->includePlugins(array('test'),'js');
        $this->scripts_include->includePlugins(array('test'),'css');
        $this->layout->render();
    }
    public function layout2(){
        $this->layout->layout='respond';
        $this->layout->layoutsFolder='layout/respond';
        
        $this->layout->navTitle='Latest Features';
        $this->layout->render();
    }
    public function encrypt_test($text){
        echo 'Text to en-code= '.$text.'<br>';
        $enc_text=c_encode($text);
        echo 'Encoded text= '.$enc_text.'<br>';
        echo 'Decoded text= '.c_decode($enc_text).'<br>';
        exit;
    }
}