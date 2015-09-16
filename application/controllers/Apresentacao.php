<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Apresentacao extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies

	}

	// List all your items
	public function index( $offset = 0 )
	{
		$this->load->view("apresentacao");
	}

	
}

/* End of file Apresentacao.php */
/* Location: ./application/controllers/Apresentacao.php */
