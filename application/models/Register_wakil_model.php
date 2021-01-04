<?php
/* 
 *   
 * 
 */
 
class Register_wakil_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get register_wakil by no_urut
     */
    function get_register_wakil($no_urut)
    {
        return $this->db->get_where('register_wakil',array('no_urut'=>$no_urut))->row_array();
    }
        
    /*
     * Get all register_wakil
     */
    function get_all_register_wakil()
    {
        $this->db->order_by('no_urut', 'desc');
        return $this->db->get('register_wakil')->result_array();
    }
        
    /*
     * function to add new register_wakil
     */
    function add_register_wakil($params)
    {
        $this->db->insert('register_wakil',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update register_wakil
     */
    function update_register_wakil($no_urut,$params)
    {
        $this->db->where('no_urut',$no_urut);
        return $this->db->update('register_wakil',$params);
    }
    
    /*
     * function to delete register_wakil
     */
    function delete_register_wakil($no_urut)
    {
        return $this->db->delete('register_wakil',array('no_urut'=>$no_urut));
    }
}
