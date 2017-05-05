<?php defined('BASEPATH') OR exit('No direct script is allowed');


class Pages extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->data['main_view'] = 'pages/';
	}


	public function index()
	{
		$this->data['main_view'] .= 'index_view';
		$this->render();
	}



	public function about()
	{
		$this->data['main_view'] .= 'index_view#about';
		$this->render();
	}

}/********* End Tests Controller Class ********/