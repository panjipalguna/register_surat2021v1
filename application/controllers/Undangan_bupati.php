<?php
/* 
 *   
 * 
 */
 
class Undangan_bupati extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Undangan_bupati_model');
    } 

    /*
     * Listing of undangan_bupati
     */
    function index()
    {
        $data['undangan_bupati'] = $this->Undangan_bupati_model->get_all_undangan_bupati();
        
        $data['_view'] = 'undangan_bupati/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new undangan_bupati
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'dari' => $this->input->post('dari'),
				'no_surat' => $this->input->post('no_surat'),
				'tanggal' => $this->input->post('tanggal'),
				'uraian' => $this->input->post('uraian'),
				'keterangan' => $this->input->post('keterangan'),
				'upload_foto' => $this->input->post('upload_foto'),
            );
            
            $undangan_bupati_id = $this->Undangan_bupati_model->add_undangan_bupati($params);
            redirect('undangan_bupati/index');
        }
        else
        {            
            $data['_view'] = 'undangan_bupati/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a undangan_bupati
     */
    function edit($no)
    {   
        // check if the undangan_bupati exists before trying to edit it
        $data['undangan_bupati'] = $this->Undangan_bupati_model->get_undangan_bupati($no);
        
        if(isset($data['undangan_bupati']['no']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'dari' => $this->input->post('dari'),
					'no_surat' => $this->input->post('no_surat'),
					'tanggal' => $this->input->post('tanggal'),
					'uraian' => $this->input->post('uraian'),
					'keterangan' => $this->input->post('keterangan'),
					'upload_foto' => $this->input->post('upload_foto'),
                );

                $this->Undangan_bupati_model->update_undangan_bupati($no,$params);            
                redirect('undangan_bupati/index');
            }
            else
            {
                $data['_view'] = 'undangan_bupati/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The undangan_bupati you are trying to edit does not exist.');
    } 

    /*
     * Deleting undangan_bupati
     */
    function remove($no)
    {
        $undangan_bupati = $this->Undangan_bupati_model->get_undangan_bupati($no);

        // check if the undangan_bupati exists before trying to delete it
        if(isset($undangan_bupati['no']))
        {
            $this->Undangan_bupati_model->delete_undangan_bupati($no);
            redirect('undangan_bupati/index');
        }
        else
            show_error('The undangan_bupati you are trying to delete does not exist.');
    }
    
}
