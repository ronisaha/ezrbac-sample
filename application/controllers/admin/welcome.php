<?php


class Welcome extends CI_Controller {

	public function access_map(){
        return array(
            'index'=>'view',
            'greeting'=>'edit'
        );
    }

    public function index()
	{
        $this->load->view('welcome_message');
	}

    public function greeting()
    {
        $this->load->view('admin/welcome_message');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */