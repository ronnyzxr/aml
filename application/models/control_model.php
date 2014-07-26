<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Control_Model extends CI_Model
{
    private $access_table = 'tbl_acl_access';
    private $page_table = 'tbl_acl_page';
    private $permission_table = 'tbl_acl_permission';
    
    public function getAvailablePages(){
        $data = $this->getAllowedPages();
        echo '<pre>';
        print_r($data);
    }
    
    private function getAllowedPages($permission_id){
        $get = 'page_id';
        $this->db->select($get);
        
        //FROM AND JOINS
        $this->db->from($this->access_table);
        $this->db->join($this->page_table, $this->page_table.'.page_id = '.$this->access_table.'.page_id');
        $this->db->join($this->permission_table, $this->permission_table.'.permission_id = '.$this->permission_table.'.permission_id');
        
        $this->db->where($this->permission_table.'.permission_id', $permission_id);
        
        $data = $this->db->get();
        return count($data)>0?$data:array();
    }
    
    // PERMISSION
    public function save_permission($data){
        echo '<pre>';
        print_r($data);
        $this->db->insert('tbl_acl_permission', $data);
    }
}