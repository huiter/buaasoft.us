<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 引用流程接入口 
 */
class Quit extends HT_Controller
{		
	public function __construct()
	{
		parent::__construct();		
	}
	
	public function index()
	{	
		$this->session->sess_destroy();
		redirect(base_url('/'));
	}
}

/* End of file explore.php */
/* Location: ./application/controllers/explore.php */