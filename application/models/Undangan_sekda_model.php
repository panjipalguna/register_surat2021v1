<?php
/* 
 *   
 * 
 */
 
class Undangan_sekda_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get undangan_sekda by no
     */
    function get_undangan_sekda($no)
    {
        return $this->db->get_where('undangan_sekda',array('no'=>$no))->row_array();
    }
        
    /*
     * Get all undangan_sekda
     */
    function get_all_undangan_sekda()
    {
        $this->db->order_by('no', 'desc');
        return $this->db->get('undangan_sekda')->result_array();
    }
        
    /*
     * function to add new undangan_sekda
     */
    function add_undangan_sekda($params)
    {
        $this->db->insert('undangan_sekda',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update undangan_sekda
     */
    function update_undangan_sekda($no,$params)
    {
        $this->db->where('no',$no);
        return $this->db->update('undangan_sekda',$params);
    }
    
    /*
     * function to delete undangan_sekda
     */
    function delete_undangan_sekda($no)
    {
        return $this->db->delete('undangan_sekda',array('no'=>$no));
    }
}
