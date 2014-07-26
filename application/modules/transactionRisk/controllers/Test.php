<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class test extends MX_Controller 
{
    function __construct()
    {
        parent::__construct();
    }
    
    public function index(){
        
        echo 'WONDERWOMAN<br/>';
        $this->load->model('admin/testModel','test');
        $this->test->testFunction();
        $this->load->view('admin/test');
    }
    
    public function sample(){
        echo 'SUPERMAN';
    }
    
    public function test(){
        echo 'SUPERMAN';
    }
}