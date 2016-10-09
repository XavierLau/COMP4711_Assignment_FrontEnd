<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends Application
{

	/**
	 * Controller for the homepage.
	 */
	public function index()
	{
		$this->data['pagebody'] = 'homepage';
		$log = $this->logs->get_all();
		$this->render(); 
	}

}
