<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Stocks extends CI_Model {

    // array that holds all of the currently constructed service packages
    var $stocks = array(
        array('id' => '1', 'name' => 'Preparation Service',
              'description' => 'Load up your F22 with Fuel and Oil to reach Patrol ready status. Cost relates to Price Per Flight Hour.', 
              'price' => '68362', 'quantity' => '50'),
            array('id' => '2', 'name' => 'Maintenence Service',
              'description' => 'Check over the F22 and check oil levels, and wear on rivets, primary structure, and equipment. 43 maintenance man-hours required per flight hour.', 
              'price' => '400000', 'quantity' => '15'),
            array('id' => '3', 'name' => 'Ai Combat Rearm Service',
              'description' => 'Load up your F22 with AIM 120C Missles and 20mm PGU-28A/B SAPHEI rounds to reach Combat ready status.', 
              'price' => '2520000', 'quantity' => '20')         
        );

    // Default Constructor
    public function __construct()
    {
            parent::__construct();
    }

    // Grab all of the available sellable stocks
    public function get_all()
    {
        return $this->stocks;
    }

    // Get one available sellable stocks
    public function get_one($id)
    {
        // find the correct service id, return it
        foreach($this->stocks as $stock)
        {
            if($stock['id'] == $id)
            {
                return $stock;
            }
        }
    }
}
