<?php
/* 
 *   
 * 
 */
 
class Undangan_wakil extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Undangan_wakil_model');
    } 

    /*
     * Listing of undangan_wakil
     */
    function index()
    {
        $data['undangan_wakil'] = $this->Undangan_wakil_model->get_all_undangan_wakil();
        
        $data['_view'] = 'undangan_wakil/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new undangan_wakil
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
            
            $undangan_wakil_id = $this->Undangan_wakil_model->add_undangan_wakil($params);
            redirect('undangan_wakil/index');
        }
        else
        {            
            $data['_view'] = 'undangan_wakil/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a undangan_wakil
     */
    function edit($no)
    {   
        // check if the undangan_wakil exists before trying to edit it
        $data['undangan_wakil'] = $this->Undangan_wakil_model->get_undangan_wakil($no);
        
        if(isset($data['undangan_wakil']['no']))
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

                $this->Undangan_wakil_model->update_undangan_wakil($no,$params);            
                redirect('undangan_wakil/index');
            }
            else
            {
                $data['_view'] = 'undangan_wakil/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The undangan_wakil you are trying to edit does not exist.');
    } 

    /*
     * Deleting undangan_wakil
     */
    function remove($no)
    {
        $undangan_wakil = $this->Undangan_wakil_model->get_undangan_wakil($no);

        // check if the undangan_wakil exists before trying to delete it
        if(isset($undangan_wakil['no']))
        {
            $this->Undangan_wakil_model->delete_undangan_wakil($no);
            redirect('undangan_wakil/index');
        }
        else
            show_error('The undangan_wakil you are trying to delete does not exist.');
    }
    
}
