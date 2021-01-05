<?php
/* 
 *   
 * 
 */
 
class Register_wakil extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Register_wakil_model');
    } 

    /*
     * Listing of register_wakil
     */
    function index()
    {
        $data['register_wakil'] = $this->Register_wakil_model->get_all_register_wakil();
        
        $data['_view'] = 'register_wakil/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new register_wakil
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
            
            $register_wakil_id = $this->Register_wakil_model->add_register_wakil($params);
            redirect('register_wakil/index');
        }
        else
        {            
            $data['_view'] = 'register_wakil/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a register_wakil
     */
    function edit($no_urut)
    {   
        // check if the register_wakil exists before trying to edit it
        $data['register_wakil'] = $this->Register_wakil_model->get_register_wakil($no_urut);
        
        if(isset($data['register_wakil']['no_urut']))
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

                $this->Register_wakil_model->update_register_wakil($no_urut,$params);            
                redirect('register_wakil/index');
            }
            else
            {
                $data['_view'] = 'register_wakil/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The register_wakil you are trying to edit does not exist.');
    } 

    /*
     * Deleting register_wakil
     */
    function remove($no_urut)
    {
        $register_wakil = $this->Register_wakil_model->get_register_wakil($no_urut);

        // check if the register_wakil exists before trying to delete it
        if(isset($register_wakil['no_urut']))
        {
            $this->Register_wakil_model->delete_register_wakil($no_urut);
            redirect('register_wakil/index');
        }
        else
            show_error('The register_wakil you are trying to delete does not exist.');
    }
    
}
