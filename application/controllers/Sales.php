<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends Application
{

	//sales page
	public function index()
	{
		$this->data['pagebody'] = 'sales';
		$supplies = $this->supplies->get_all();
		$stocks = $this->stocks->get_all();

		$inventory = array();

		foreach ($supplies as $supply)
		{
			$standalone[] = array('supply' => $supply['name'], 'description' => $supply['description'], 'price' => $supply['price']);
		}
		//go through services
		foreach ($stocks as $stock)
		{
			$bundle[] = array('service' => $stock['name'], 'description' => $stock['description'], 'price' => $stock['price']);
		}
		$this->data['sales'] = array(array('supplies' => $standalone, 'services' => $bundle));
		print_r($this->data['sales']);
		$this->render();
	}

	//display item page
	public function item($id)
	{
		$this->data['pagebody'] = 'item';
		$item = $this->supplies->get_one($id);
		$this->data = array_merge($this->data, $item);
		$this->render();
	}

	//purchase product
	public function purchase()
	{
		//results returned from POST
		$results = $this->input->post();

		//go through results and add the quanity specified to the stocks
		foreach ($results as $service)
		{
			//add function in model to add to stock of selected service
			$data->stock->set_quantity($service['name'], "minus", $service['quantity']);
		}

		//return message upon successful purchase
	}
}
