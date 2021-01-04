<?php
/* 
 *   
 * 
 */
 
class Undangan_bupati_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get undangan_bupati by no
     */
    function get_undangan_bupati($no)
    {
        return $this->db->get_where('undangan_bupati',array('no'=>$no))->row_array();
    }
        
    /*
     * Get all undangan_bupati
     */
    function get_all_undangan_bupati()
    {
        $this->db->order_by('no', 'desc');
        return $this->db->get('undangan_bupati')->result_array();
    }
        
    /*
     * function to add new undangan_bupati
     */
    function add_undangan_bupati($params)
    {
        $this->db->insert('undangan_bupati',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update undangan_bupati
     */
    function update_undangan_bupati($no,$params)
    {
        $this->db->where('no',$no);
        return $this->db->update('undangan_bupati',$params);
    }
    
    /*
     * function to delete undangan_bupati
     */
    function delete_undangan_bupati($no)
    {
        return $this->db->delete('undangan_bupati',array('no'=>$no));
    }
}
