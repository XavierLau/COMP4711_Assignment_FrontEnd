<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Stocks extends CI_Model {

    // array that holds all of the currently constructed service packages
    var $stocks = array(
        array('id' => '1', 'name' => 'Preparation Service', 'service' => 'Preparation',
              'description' => 'Load up your F22 with Fuel and Oil to reach Patrol ready status. Cost relates to Price Per Flight Hour.', 
              'price' => '68362', 'quantity' => '50'),
        array('id' => '2', 'name' => 'Maintenence Service', 'service' => 'Maintenence',
              'description' => 'Check over the F22 and check oil levels, and wear on rivets, primary structure, and equipment. 43 maintenance man-hours required per flight hour.', 
              'price' => '400000', 'quantity' => '26'),
        array('id' => '3', 'name' => 'Air Combat Rearm Service', 'service' => 'Rearm Air',
              'description' => 'Load up your F22 with 6 AIM 120C Missles and 480 20mm PGU-28A/B SAPHEI rounds to reach Air Combat ready status.', 
              'price' => '2520000', 'quantity' => '20'),
        array('id' => '4', 'name' => 'Ground Combat Rearm Service', 'service' => 'Rearm Ground',
              'description' => 'Load up your F22 with 2 AIM 120C Missles, 480 20mm PGU-28A/B SAPHEI rounds, and 4 JDAM\'s to reach Ground Combat ready status.', 
              'price' => '1000000', 'quantity' => '12'),
        array('id' => '5', 'name' => 'Wheel Repair Service', 'service' => 'Wheel Repair',
              'description' => 'Swap the 3 old wheels out with 3 new wheels, as well as check for wear in the landing gear. Check this often to reduce the chance of landing failure.', 
              'price' => '23000', 'quantity' => '40'),
        array('id' => '6', 'name' => 'Replace Windshield Service', 'service' => 'Windshield Repair',
              'description' => 'Replace the glass windshield on the F-22\'s cockpit. These windshields could crack under high G manouvers.', 
              'price' => '94000', 'quantity' => '1')
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
        // find the correct stock id, return it
        foreach($this->stocks as $stock)
        {
            if($stock['id'] == $id)
            {
                return $stock;
            }
        }
    }
    
    // Get the service linked to the stock
    public function get_service($name)
    {
        // find the correct stock name, return the related service recipe
        foreach($this->stocks as $stock)
        {
            if($stock['name'] == $name)
            {
                return $stock['service'];
            }
        }
    }
    
    // Get the description of the stock
    public function get_description($name)
    {
        // find the correct stock name, return the service description
        foreach($this->stocks as $stock)
        {
            if($stock['name'] == $name)
            {
                return $stock['description'];
            }
        }
    }
    
    // Set the price of the Stock item
    public function set_price($name, $price)
    {
        // find the correct stock name, set the price
        foreach($this->stocks as $stock)
        {
            if($stock['name'] == $name)
            {
                $stock['price'] = $price;
            }
        }
    }
    
    /**
     * Sets or modifes the quanitity of a Stock item.
     * @param type $name The name of the Stock item
     * @param type $mode Add, Minus, or Equal
     * @param type $quantity Set the quantity of the Stock item
     */
    public function set_quantity($name, $mode, $quantity)
    {
        // find the correct stock name, set the quantity
        foreach($this->stocks as $stock)
        {
            if($stock['name'] == $name)
            {
                // Add, Minus, or Equal the value to the quantity amount.
                switch($mode)
                {
                    case 'add':
                        $stock['quantity'] += $quantity;
                        break;
                    case 'minus':
                        $stock['quantity'] -= $quantity;
                        break;
                    case 'equal':
                        $stock['quantity'] = $quantity;
                        break;
                }
            }
        }
    }
    
    /**
     * 
     * @param type $name The name of the Stock
     * @param type $description Set the description of the Stock item
     */
    public function set_description($name, $description)
    {
        // find the correct stock name, set the description
        foreach($this->stocks as $stock)
        {
            if($stock['name'] == $name)
            {
                $stock['description'] = $description;
            }
        }
    }
    
    
}
