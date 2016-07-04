<?php
class HomeController extends CI_Controller{


	 function __construct() {
        parent::__construct();
		$this->load->model('AkCrudModel');
		$this->load->view('inc/header');
    }
	
	public function index()
	{
		$data['content'] = $this->AkCrudModel->display();

		$this->load->view('HomeView',$data);
		$this->load->view('inc/footer');
	}



	public function createUser()
	{
		$data['title'] = 'Insert';
		$data['action'] = 'insert';
		$data['content'][0] = '';
		$this->load->view('inc/header');
		$this->load->view('insertView',$data);
		$this->load->view('inc/footer');
	}




	public function insertUser()
	{
		//var_dump($this->input->post('name'));
		$data = array(
			'name' => $this->input->post('name'),
			'email' =>$this->input->post('email'),
			'password' => $this->input->post('password'),
			'contactNo' => $this->input->post('phone')
			 );
		//$this->load->model('AkCrudModel');
		$this->AkCrudModel->create($data);
		
		redirect('/');
		
	}

	public function editUser($id)
	{
		$data['title'] = 'Update';
		$data['action'] = 'update';

		//$this->load->model('AkCrudModel');
		$data['content'] = $this->AkCrudModel->editUser($id);
		$this->load->view('inc/header');
		$this->load->view('InsertView',$data);
		$this->load->view('inc/footer');
	}

	public function updateUser($id)
	{
		$info = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
			'contactNo' => $this->input->post('phone') 
			);

		//$this->load->model('AkCrudModel');
		$data['content'] = $this->AkCrudModel->updateUser($id,$info);
		redirect('/');
	}
	public function removeUser($id)
	{
		$this->AkCrudModel->removeUser($id);
		redirect('/');
	}

}
