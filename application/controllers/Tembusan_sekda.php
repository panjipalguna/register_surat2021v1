<?php
/* 
 *   
 * 
 */
 
class Tembusan_sekda extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tembusan_sekda_model');
    } 

    /*
     * Listing of tembusan_sekda
     */
    function index()
    {
        $data['tembusan_sekda'] = $this->Tembusan_sekda_model->get_all_tembusan_sekda();
        
        $data['_view'] = 'tembusan_sekda/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new tembusan_sekda
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'asal_surat' => $this->input->post('asal_surat'),
				'tanggal_surat' => $this->input->post('tanggal_surat'),
				'no_surat' => $this->input->post('no_surat'),
				'keterangan' => $this->input->post('keterangan'),
            );
            
            $tembusan_sekda_id = $this->Tembusan_sekda_model->add_tembusan_sekda($params);
            redirect('tembusan_sekda/index');
        }
        else
        {            
            $data['_view'] = 'tembusan_sekda/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a tembusan_sekda
     */
    function edit($no)
    {   
        // check if the tembusan_sekda exists before trying to edit it
        $data['tembusan_sekda'] = $this->Tembusan_sekda_model->get_tembusan_sekda($no);
        
        if(isset($data['tembusan_sekda']['no']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'asal_surat' => $this->input->post('asal_surat'),
					'tanggal_surat' => $this->input->post('tanggal_surat'),
					'no_surat' => $this->input->post('no_surat'),
					'keterangan' => $this->input->post('keterangan'),
                );

                $this->Tembusan_sekda_model->update_tembusan_sekda($no,$params);            
                redirect('tembusan_sekda/index');
            }
            else
            {
                $data['_view'] = 'tembusan_sekda/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The tembusan_sekda you are trying to edit does not exist.');
    } 

    /*
     * Deleting tembusan_sekda
     */
    function remove($no)
    {
        $tembusan_sekda = $this->Tembusan_sekda_model->get_tembusan_sekda($no);

        // check if the tembusan_sekda exists before trying to delete it
        if(isset($tembusan_sekda['no']))
        {
            $this->Tembusan_sekda_model->delete_tembusan_sekda($no);
            redirect('tembusan_sekda/index');
        }
        else
            show_error('The tembusan_sekda you are trying to delete does not exist.');
    }
    
}
