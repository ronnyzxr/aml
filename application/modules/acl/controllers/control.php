<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Control extends MX_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('acl/control_model','control');
    }
    
    public function index(){
        $page_data = array(
            'header' => $this->load->view('header','',true),
            //'content' => $this->load->view('sample','',true),
            'sidebar' => $this->load->view('sidebar','',true),
        );
        
        $this->load->view('main',$page_data);
    }
    
    public function admin(){
        
        $data = array(
            
        );
        
        $page_data = array(
            'header'    => $this->load->view('header','',true),
            'content'   => $this->load->view('acl/admin_content','',true),
            'sidebar' => $this->load->view('sidebar','',true),
            'plugins' => array(
                'datatables',
            ),
            'js_files'  => array(
                'acl/permission',
            ),
        );
        
        $this->load->view('main',$page_data);
    }
    
    //ajax
    public function save(){
        if ($this->input->post('type')){
            $type = $this->input->post('type',true);
            if ($type == 'permission'){
                unset($_POST['type']);
                if ($this->control->save_permission($_POST)){
                    echo json_encode(array('status' => 'Good'));
                }
                else{
                    echo json_encode(array('status' => 'Bad'));
                }
            }
        }
    }
}
