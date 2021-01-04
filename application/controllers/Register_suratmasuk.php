<?php
/* 
 *   
 * 
 */
 
class Register_suratmasuk extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Register_suratmasuk_model');
    } 

    /*
     * Listing of register_suratmasuk
     */
    function index()
    {
        $data['register_suratmasuk'] = $this->Register_suratmasuk_model->get_all_register_suratmasuk();
        
        $data['_view'] = 'register_suratmasuk/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new register_suratmasuk
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'tanggal_masuk' => $this->input->post('tanggal_masuk'),
				'asal_surat' => $this->input->post('asal_surat'),
				'no_surat' => $this->input->post('no_surat'),
				'tanggal_surat' => $this->input->post('tanggal_surat'),
				'perihal' => $this->input->post('perihal'),
				'kode' => $this->input->post('kode'),
				'keterangan' => $this->input->post('keterangan'),
				'upload_foto' => $this->input->post('upload_foto'),
            );
            
            $register_suratmasuk_id = $this->Register_suratmasuk_model->add_register_suratmasuk($params);
            redirect('register_suratmasuk/index');
        }
        else
        {            
            $data['_view'] = 'register_suratmasuk/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a register_suratmasuk
     */
    function edit($no_urut)
    {   
        // check if the register_suratmasuk exists before trying to edit it
        $data['register_suratmasuk'] = $this->Register_suratmasuk_model->get_register_suratmasuk($no_urut);
        
        if(isset($data['register_suratmasuk']['no_urut']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'tanggal_masuk' => $this->input->post('tanggal_masuk'),
					'asal_surat' => $this->input->post('asal_surat'),
					'no_surat' => $this->input->post('no_surat'),
					'tanggal_surat' => $this->input->post('tanggal_surat'),
					'perihal' => $this->input->post('perihal'),
					'kode' => $this->input->post('kode'),
					'keterangan' => $this->input->post('keterangan'),
					'upload_foto' => $this->input->post('upload_foto'),
                );

                $this->Register_suratmasuk_model->update_register_suratmasuk($no_urut,$params);            
                redirect('register_suratmasuk/index');
            }
            else
            {
                $data['_view'] = 'register_suratmasuk/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The register_suratmasuk you are trying to edit does not exist.');
    } 

    /*
     * Deleting register_suratmasuk
     */
    function remove($no_urut)
    {
        $register_suratmasuk = $this->Register_suratmasuk_model->get_register_suratmasuk($no_urut);

        // check if the register_suratmasuk exists before trying to delete it
        if(isset($register_suratmasuk['no_urut']))
        {
            $this->Register_suratmasuk_model->delete_register_suratmasuk($no_urut);
            redirect('register_suratmasuk/index');
        }
        else
            show_error('The register_suratmasuk you are trying to delete does not exist.');
    }
    
}
