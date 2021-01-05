<?php
/* 
 *   
 * 
 */
 
class Register_bupati_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get register_bupati by no_urut
     */
    function get_register_bupati($no_urut)
    {
        return $this->db->get_where('register_bupati',array('no_urut'=>$no_urut))->row_array();
    }
        
    /*
     * Get all register_bupati
     */
    function get_all_register_bupati()
    {
        $this->db->order_by('no_urut', 'desc');
        return $this->db->get('register_bupati')->result_array();
    }
        
    /*
     * function to add new register_bupati
     */
    function add_register_bupati($params)
    {
        $this->db->insert('register_bupati',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update register_bupati
     */
    function update_register_bupati($no_urut,$params)
    {
        $this->db->where('no_urut',$no_urut);
        return $this->db->update('register_bupati',$params);
    }
    
    /*
     * function to delete register_bupati
     */
    function delete_register_bupati($no_urut)
    {
        return $this->db->delete('register_bupati',array('no_urut'=>$no_urut));
    }
    private function _uploadImage()
{
    $config['upload_path']          = './upload/product/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->product_id;
    $config['overwrite']			= true;
    $config['max_size']             = 1024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('image')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
}
}
