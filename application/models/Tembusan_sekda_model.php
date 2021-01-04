<?php
/* 
 *   
 * 
 */
 
class Tembusan_sekda_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tembusan_sekda by no
     */
    function get_tembusan_sekda($no)
    {
        return $this->db->get_where('tembusan_sekda',array('no'=>$no))->row_array();
    }
        
    /*
     * Get all tembusan_sekda
     */
    function get_all_tembusan_sekda()
    {
        $this->db->order_by('no', 'desc');
        return $this->db->get('tembusan_sekda')->result_array();
    }
        
    /*
     * function to add new tembusan_sekda
     */
    function add_tembusan_sekda($params)
    {
        $this->db->insert('tembusan_sekda',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tembusan_sekda
     */
    function update_tembusan_sekda($no,$params)
    {
        $this->db->where('no',$no);
        return $this->db->update('tembusan_sekda',$params);
    }
    
    /*
     * function to delete tembusan_sekda
     */
    function delete_tembusan_sekda($no)
    {
        return $this->db->delete('tembusan_sekda',array('no'=>$no));
    }
}
