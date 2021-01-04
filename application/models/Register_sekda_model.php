<?php
/* 
 *   
 * 
 */
 
class Register_sekda_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get register_sekda by no_urut
     */
    function get_register_sekda($no_urut)
    {
        return $this->db->get_where('register_sekda',array('no_urut'=>$no_urut))->row_array();
    }
        
    /*
     * Get all register_sekda
     */
    function get_all_register_sekda()
    {
        $this->db->order_by('no_urut', 'desc');
        return $this->db->get('register_sekda')->result_array();
    }
        
    /*
     * function to add new register_sekda
     */
    function add_register_sekda($params)
    {
        $this->db->insert('register_sekda',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update register_sekda
     */
    function update_register_sekda($no_urut,$params)
    {
        $this->db->where('no_urut',$no_urut);
        return $this->db->update('register_sekda',$params);
    }
    
    /*
     * function to delete register_sekda
     */
    function delete_register_sekda($no_urut)
    {
        return $this->db->delete('register_sekda',array('no_urut'=>$no_urut));
    }
}
