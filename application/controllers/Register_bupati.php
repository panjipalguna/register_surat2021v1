<?php
/* 
 *   
 * 
 */
 
class Register_bupati extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Register_bupati_model');
    } 

    /*
     * Listing of register_bupati
     */
    function index()
    {
        $data['register_bupati'] = $this->Register_bupati_model->get_all_register_bupati();
        
        $data['_view'] = 'register_bupati/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new register_bupati
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $temp1 = $this->input->post('tanggal_masuk');
            $temp2 = $this->input->post('tanggal_surat');
            $params = array(
                'tanggal_masuk' => date('Y-m-d', strtotime($temp1)),
				// 'tanggal_masuk' => $this->input->post('tanggal_masuk'),
				'asal_surat' => $this->input->post('asal_surat'),
                'no_surat' => $this->input->post('no_surat'),
                'tanggal_surat' => date('Y-m-d', strtotime($temp2)),
				// 'tanggal_surat' => $this->input->post('tanggal_surat'),
				'perihal' => $this->input->post('perihal'),
				'kode' => $this->input->post('kode'),
				'keterangan' => $this->input->post('keterangan'),
				'upload_foto' => $this->input->post('upload_foto'),
            );
            
            $register_bupati_id = $this->Register_bupati_model->add_register_bupati($params);
            redirect('register_bupati/index');
        }
        else
        {            
            $data['_view'] = 'register_bupati/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a register_bupati
     */
    function edit($no_urut)
    {   
        // check if the register_bupati exists before trying to edit it
        $data['register_bupati'] = $this->Register_bupati_model->get_register_bupati($no_urut);
        
        if(isset($data['register_bupati']['no_urut']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $temp1 = $this->input->post('tanggal_masuk');
                $temp2 = $this->input->post('tanggal_surat');
                $params = array(
                    'tanggal_masuk' => date('Y-m-d', strtotime($temp1)),
					// 'tanggal_masuk' => $this->input->post('tanggal_masuk'),
					'asal_surat' => $this->input->post('asal_surat'),
                    'no_surat' => $this->input->post('no_surat'),
                    'tanggal_surat' => date('Y-m-d', strtotime($temp2)),
					// 'tanggal_surat' => $this->input->post('tanggal_surat'),
					'perihal' => $this->input->post('perihal'),
					'kode' => $this->input->post('kode'),
					'keterangan' => $this->input->post('keterangan'),
					'upload_foto' => $this->input->post('upload_foto'),
                );

                $this->Register_bupati_model->update_register_bupati($no_urut,$params);            
                redirect('register_bupati/index');
            }
            else
            {
                $data['_view'] = 'register_bupati/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The register_bupati you are trying to edit does not exist.');
    } 

    /*
     * Deleting register_bupati
     */
    function remove($no_urut)
    {
        $register_bupati = $this->Register_bupati_model->get_register_bupati($no_urut);

        // check if the register_bupati exists before trying to delete it
        if(isset($register_bupati['no_urut']))
        {
            $this->Register_bupati_model->delete_register_bupati($no_urut);
            redirect('register_bupati/index');
        }
        else
            show_error('The register_bupati you are trying to delete does not exist.');
    }
    
}
