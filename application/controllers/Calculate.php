<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';

class Calculate extends REST_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies

	}

	// List all your items
	public function index_get($valor = NULL)
	{
		if((int)$valor < 0):
			$this->response(array("error" => "InvalidArgumentException"), 400);
		endif;
		if((int)$valor === 0):
			$this->response(array('0' => '0'), 200);
		endif;
		if($valor % 10 != 0 && $valor != 0):
			$this->response(array("error" => "BillUnavailableException"), 400);
		endif;
		
		if(is_int((int)$valor) && $valor):

			
			$array = array(100, 50, 20, 10);
			$array_retorno = array();
			
			foreach($array as $moeda):
				$div = $valor / $moeda;
				$parte_inteira = (int) $div;
				if($parte_inteira > 0):
					$array_retorno["$moeda"] = $parte_inteira;
				endif;
				$valor = ($valor % $moeda);
			endforeach;
			
			$this->response($array_retorno, 200);
		endif;

		
	}

	// Add a new item
	public function find_get($id =null)
	{

	}

	//Update one item
	public function index_put( $id = NULL )
	{

	}

	//Delete one item
	public function index_delete( $id = NULL )
	{

	}
}

/* End of file Calculate.php */
/* Location: ./application/controllers/Calculate.php */
