<?php


class Welcome extends CI_Controller {

	public function access_map(){
        return array(
            'index'=>'view',
            'create_user'=>'view',
            'greeting'=>'edit'
        );
    }

    public function index()
	{
        $this->load->view('welcome_message');
	}

    public function create_user()
    {
       $x =  $this->ezrbac->createUser(array(
            'user_role' => 'Admin',
            'meta' => array('first_name'=>'First', 'last_name'=>'Last'),
            'email' => 'email@domain.com',
            'password' => 'secret',
            'status' => '1'
        ));

        echo "User created with user id : " . $x;
    }

    public function greeting()
    {
        $this->load->view('admin/welcome_message');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */