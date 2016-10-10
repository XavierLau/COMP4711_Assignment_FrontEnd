<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Supplies extends CI_Model {

    // array that holds all of the data related to supplies
    var $supplies = array(
        array('id' => '1', 'name' => 'Fuel', 'description' => 'Military Grade Fuel for the F22.', 
              'price' => 300, 'quantity' => 20000, 'src' => '', 'link' => 'product/1'),
        array('id' => '2', 'name' => 'Oil', 'description' => 'Oil lubricant to ensure mechanical parts operate smoothly.',
              'price' => 100, 'quantity' => 14100, 'src' => '', 'link' => 'product/2'),
        array('id' => '3', 'name' => 'Missles', 'description' => 'AIM 120C Missles for Air-to-Air combat.', 
              'price' => 400000, 'quantity' => 680, 'src' => 'assets/img/AIM-120_1.jpg', 'link' => 'product/3'),
        array('id' => '4', 'name' => 'Ammo', 'description' => '20mm PGU-28A/B SAPHEI rounds for the F-22\'s M61A2 Cannon.', 
              'price' => 250, 'quantity' => 53070, 'src' => 'assets/img/PGU-28A_1.jpg', 'link' => 'product/4'),
        array('id' => '5', 'name' => 'Rivets', 'description' => 'Rivets for the inner frame of the F-22.', 
              'price' => 350, 'quantity' => 542, 'src' => '', 'link' => 'product/5'),
        array('id' => '6', 'name' => 'JDAM', 'description' => 'A cheap smart bomb for use in use in ground attacks.', 
              'price' => 25000, 'quantity' => 756, 'src' => '', 'link' => 'product/6'),
        array('id' => '7', 'name' => 'Wheel', 'description' => 'Wheels for the landing gear. Essential for landing.', 
              'price' => 2400, 'quantity' => 230, 'src' => '', 'link' => 'product/7'),
        array('id' => '8', 'name' => 'Windshield', 'description' => 'Specially constructed glass for the cockpit.', 
              'price' => 80000, 'quantity' => 5, 'src' => '', 'link' => 'product/8')
        );

    // Default Constructor
    public function __construct()
    {
            parent::__construct();
    }

    // Grab all of the supply data
    public function get_all()
    {
        return $this->supplies;
    }

    // Get one supply item
    public function get_one($id)
    {
        // find the correct id, return it
        foreach($this->supplies as $supply)
        {
            if($supply['id'] == $id)
            {
                return $supply;
            }
        }
    }
    
    // Get the description of the supply
    public function get_description($name)
    {
        // find the correct supply name, return the supply description
        foreach($this->supplies as $supply)
        {
            if($supply['name'] == $name)
            {
                return $supply['description'];
            }
        }
    }
    
    // Get the price of the supply
    public function get_price($name)
    {
        // find the correct supply name, return the supply price
        foreach($this->supplies as $supply)
        {
            if($supply['name'] == $name)
            {
                return $supply['price'];
            }
        }
    }
    
    // Get the quantity of the supply
    public function get_quantity($name)
    {
        // find the correct supply name, return the supply quantity
        foreach($this->supplies as $supply)
        {
            if($supply['name'] == $name)
            {
                return $supply['quantity'];
            }
        }
    }
        
    // Set the description of the supply item
    public function set_description($name, $description)
    {
        // find the correct supply name, set the supply description
        foreach($this->supplies as $supply)
        {
            if($supply['name'] == $name)
            {
                $supply['description'] = $description;
            }
        }
    }
    
    // Set the price of the supply item
    public function set_price($name, $price)
    {
        // find the correct supply name, set the supply price
        foreach($this->supplies as $supply)
        {
            if($supply['name'] == $name)
            {
                $supply['price'] = $price;
            }
        }
    }
    
/**
     * Sets or modifes the quanitity of a Supply item.
     * @param type $name The name of the Supply item
     * @param type $mode Add, Minus, or Equal
     * @param type $quantity Set the quantity of the Supply item
     */
    public function set_quantity($name, $mode, $quantity)
    {
        // find the correct supply name, set the quantity
        foreach($this->supplies as $supply)
        {
            if($supply['name'] == $name)
            {
                // Add, Minus, or Equal the value to the quantity amount.
                switch($mode)
                {
                    case 'add':
                        $supply['quantity'] += $quantity;
                        break;
                    case 'minus':
                        $supply['quantity'] -= $quantity;
                        break;
                    case 'equal':
                        $supply['quantity'] = $quantity;
                        break;
                }
            }
        }
    }
  
}
