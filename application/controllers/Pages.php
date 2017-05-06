<?php defined('BASEPATH') OR exit('No direct script is allowed');


class Pages extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->data['page_title'] = '';
		$this->data['main_view']  = 'pages/';
	}


	public function index()
	{
		$this->home();
	}



	public function home()
	{
		$this->data['page_title'] = 'Home';
		$this->data['main_view'] .= 'home_view';
		$this->render();
	}


	public function about()
	{
		$this->data['page_title'] = 'About Us';
		$this->data['main_view'] .= 'about_view';
		$this->render();
	}

	public function service()
	{
		$this->data['page_title'] = 'Our Service';
		$this->data['main_view'] .= 'service_view';
		$this->render();
	}


	public function showcase()
	{
		$this->data['page_title'] = 'Showcase';
		$this->data['main_view'] .= 'showcase_view';
		$this->render();
	}


	public function contact()
	{
		$this->data['page_title'] = 'Contact Us';
		$this->data['main_view'] .= 'contact_view';
		$this->render();
	}


}/********* End Tests Controller Class ********/