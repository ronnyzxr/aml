<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Due_diligence extends MX_Controller 
{
    function __construct()
    {
        parent::__construct();
    }
    
    public function index(){
        

        $page_data = array(
            'header'    => $this->load->view('header','',true),
            'content'   => $this->load->view('kyc/scenarios/due_diligence','',true),
            'sidebar'   => $this->load->view('sidebar','',true)
        );
        
        $this->load->view('main',$page_data);
      
    }

    private function page_load(){
        
        
    }
}