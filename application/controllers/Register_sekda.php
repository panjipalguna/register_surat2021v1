<?php
/* 
 *   
 * 
 */
 
class Register_sekda extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Register_sekda_model');
    } 

    /*
     * Listing of register_sekda
     */
    function index()
    {
        $data['register_sekda'] = $this->Register_sekda_model->get_all_register_sekda();
        
        $data['_view'] = 'register_sekda/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new register_sekda
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $temp1 = $this->input->post('tanggal_masuk');
            $temp2 = $this->input->post('tanggal_surat');
            $params = array(
                // 'tanggal_masuk' => $this->input->post('tanggal_masuk'),
                'tanggal_masuk' => date('Y-m-d', strtotime($temp1)),
				'asal_surat' => $this->input->post('asal_surat'),
				'no_surat' => $this->input->post('no_surat'),
                // 'tanggal_surat' => $this->input->post('tanggal_surat'),
                'tanggal_surat' => date('Y-m-d', strtotime($temp2)),
				'perihal' => $this->input->post('perihal'),
				'kode' => $this->input->post('kode'),
				'keterangan' => $this->input->post('keterangan'),
				'upload_foto' => $this->input->post('upload_foto'),
            );
            
            $register_sekda_id = $this->Register_sekda_model->add_register_sekda($params);
            redirect('register_sekda/index');
        }
        else
        {            
            $data['_view'] = 'register_sekda/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a register_sekda
     */
    function edit($no_urut)
    {   
        // check if the register_sekda exists before trying to edit it
        $data['register_sekda'] = $this->Register_sekda_model->get_register_sekda($no_urut);
        
        if(isset($data['register_sekda']['no_urut']))
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

                $this->Register_sekda_model->update_register_sekda($no_urut,$params);            
                redirect('register_sekda/index');
            }
            else
            {
                $data['_view'] = 'register_sekda/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The register_sekda you are trying to edit does not exist.');
    } 

    /*
     * Deleting register_sekda
     */
    function remove($no_urut)
    {
        $register_sekda = $this->Register_sekda_model->get_register_sekda($no_urut);

        // check if the register_sekda exists before trying to delete it
        if(isset($register_sekda['no_urut']))
        {
            $this->Register_sekda_model->delete_register_sekda($no_urut);
            redirect('register_sekda/index');
        }
        else
            show_error('The register_sekda you are trying to delete does not exist.');
    }
    
}
