<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Category extends MX_Controller 
{
    function __construct()
    {
        parent::__construct();
    }
    
    public function index(){
        
    //permision
    //get permision
    //every permission make a function with your name of a function and the last name would  be the name of the permiosn
        $page_data = array(
            'header'    => $this->load->view('header','',true),
            'content'   => $this->load->view('kyc/profiling/category/category','',true),
            'sidebar'   => $this->load->view('sidebar','',true)
        );
        
        $this->load->view('main',$page_data);
      
    }

    //Ajax
    private function page_load(){
        
        
    }
}