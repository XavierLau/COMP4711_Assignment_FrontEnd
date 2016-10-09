<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends Application
{

	/**
    * Production controller
    * Show services, and for the selected one, show the supplies that go into it, 
    * flagging any that are not on hand. Log any items made, without updating inventory.
    *
    */
    public function index()
    {
        $this->data['pagebody'] = 'homepage';

		//the logs
		$logs = $this->logs->get_all();

		//log information
        $logInformation = array();

        //go through all the services
        foreach ($logs as $log)
        {
            $itemTransactions = array();
            //for each service
            foreach ($log['items'] as $itemKey => $itemValue)
            {
            	$itemTransactions[] = array($itemKey => $itemValue);
            }
            $logInformation[] = array('name' => $log['name'], 'type' => $log['type'], 'date' => $log['date'], 'totalPrice' => $log['totalprice'], 'itemTransactions' => $itemTransactions);
        }
		$this->data['log'] = $logInformation;
		$this->render(); 
    }
}