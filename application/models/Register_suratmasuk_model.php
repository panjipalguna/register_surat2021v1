<?php
/* 
 *   
 * 
 */
 
class Register_suratmasuk_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get register_suratmasuk by no_urut
     */
    function get_register_suratmasuk($no_urut)
    {
        return $this->db->get_where('register_suratmasuk',array('no_urut'=>$no_urut))->row_array();
    }
        
    /*
     * Get all register_suratmasuk
     */
    function get_all_register_suratmasuk()
    {
        $this->db->order_by('no_urut', 'desc');
        return $this->db->get('register_suratmasuk')->result_array();
    }
        
    /*
     * function to add new register_suratmasuk
     */
    function add_register_suratmasuk($params)
    {
        $this->db->insert('register_suratmasuk',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update register_suratmasuk
     */
    function update_register_suratmasuk($no_urut,$params)
    {
        $this->db->where('no_urut',$no_urut);
        return $this->db->update('register_suratmasuk',$params);
    }
    
    /*
     * function to delete register_suratmasuk
     */
    function delete_register_suratmasuk($no_urut)
    {
        return $this->db->delete('register_suratmasuk',array('no_urut'=>$no_urut));
    }
}
