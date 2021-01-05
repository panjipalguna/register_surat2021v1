<?php
/* 
 *   
 * 
 */
 
class Undangan_sekda extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Undangan_sekda_model');
    } 

    /*
     * Listing of undangan_sekda
     */
    function index()
    {
        $data['undangan_sekda'] = $this->Undangan_sekda_model->get_all_undangan_sekda();
        
        $data['_view'] = 'undangan_sekda/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new undangan_sekda
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $temp1 = $this->input->post('tanggal');  
            $params = array(
				'dari' => $this->input->post('dari'),
				'no_surat' => $this->input->post('no_surat'),
                // 'tanggal' => $this->input->post('tanggal'),
                'tanggal' => date('Y-m-d', strtotime($temp1)),
				'uraian' => $this->input->post('uraian'),
				'keterangan' => $this->input->post('keterangan'),
				'upload_foto' => $this->input->post('upload_foto'),
            );
            
            $undangan_sekda_id = $this->Undangan_sekda_model->add_undangan_sekda($params);
            redirect('undangan_sekda/index');
        }
        else
        {            
            $data['_view'] = 'undangan_sekda/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a undangan_sekda
     */
    function edit($no)
    {   
        // check if the undangan_sekda exists before trying to edit it
        $data['undangan_sekda'] = $this->Undangan_sekda_model->get_undangan_sekda($no);
        
        if(isset($data['undangan_sekda']['no']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $temp1 = $this->input->post('tanggal');  
                $params = array(
					'dari' => $this->input->post('dari'),
                    'no_surat' => $this->input->post('no_surat'),
                    'tanggal' => date('Y-m-d', strtotime($temp1)),
					// 'tanggal' => $this->input->post('tanggal'),
					'uraian' => $this->input->post('uraian'),
					'keterangan' => $this->input->post('keterangan'),
					'upload_foto' => $this->input->post('upload_foto'),
                );

                $this->Undangan_sekda_model->update_undangan_sekda($no,$params);            
                redirect('undangan_sekda/index');
            }
            else
            {
                $data['_view'] = 'undangan_sekda/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The undangan_sekda you are trying to edit does not exist.');
    } 

    /*
     * Deleting undangan_sekda
     */
    function remove($no)
    {
        $undangan_sekda = $this->Undangan_sekda_model->get_undangan_sekda($no);

        // check if the undangan_sekda exists before trying to delete it
        if(isset($undangan_sekda['no']))
        {
            $this->Undangan_sekda_model->delete_undangan_sekda($no);
            redirect('undangan_sekda/index');
        }
        else
            show_error('The undangan_sekda you are trying to delete does not exist.');
    }
    
}
