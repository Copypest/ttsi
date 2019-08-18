<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Form_model 
 * @author : Bidyut Biswas
 * @version : 1.0
 * @since : 22 June 2019
 */
class Form_model extends CI_Model
{
    public function getForm($cond=[]){
        $this->db->select('*');
        $this->db->from('form_fields');
        $this->db->where($cond);
        $query = $this->db->get();
        
        $result = $query->result();
        return $result;
    }

}

  