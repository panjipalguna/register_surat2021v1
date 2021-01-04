<?php
/* 
 *   
 * 
 */
 
class Undangan_wakil_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get undangan_wakil by no
     */
    function get_undangan_wakil($no)
    {
        return $this->db->get_where('undangan_wakil',array('no'=>$no))->row_array();
    }
        
    /*
     * Get all undangan_wakil
     */
    function get_all_undangan_wakil()
    {
        $this->db->order_by('no', 'desc');
        return $this->db->get('undangan_wakil')->result_array();
    }
        
    /*
     * function to add new undangan_wakil
     */
    function add_undangan_wakil($params)
    {
        $this->db->insert('undangan_wakil',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update undangan_wakil
     */
    function update_undangan_wakil($no,$params)
    {
        $this->db->where('no',$no);
        return $this->db->update('undangan_wakil',$params);
    }
    
    /*
     * function to delete undangan_wakil
     */
    function delete_undangan_wakil($no)
    {
        return $this->db->delete('undangan_wakil',array('no'=>$no));
    }
}
