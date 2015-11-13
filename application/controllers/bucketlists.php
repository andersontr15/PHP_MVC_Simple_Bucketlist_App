<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bucketlists extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function index()
	{	
		$this->load->model('Bucketlist');
		$bucketlists = $this->Bucketlist->get_all();
		$this->load->view('main', array(
      		'bucketlists'=> $bucketlists
      		));
	}

	public function add()
	{
		$this->load->model('Bucketlist');
		$post_data = $this->input->post();
		$this->Bucketlist->add($post_data);
		redirect('/main');
	}

	public function delete($id)
	{
		$this->load->model('Bucketlist');
		$this->Bucketlist->delete($id);
		redirect('/main');
	}
}

//end of main controller