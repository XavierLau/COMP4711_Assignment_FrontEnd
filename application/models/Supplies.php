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
              'price' => '300', 'quantity' => '20000'),
        array('id' => '2', 'name' => 'Oil', 'description' => 'Oil lubricant to ensure mechanical parts operate smoothly.',
              'price' => '100', 'quantity' => '14100'),
        array('id' => '3', 'name' => 'Missles', 'description' => 'AIM 120C Missles for Air-to-Air combat.', 
              'price' => '400000', 'quantity' => '680'),
        array('id' => '4', 'name' => 'Ammo', 'description' => '20mm PGU-28A/B SAPHEI rounds for the F-22\'s M61A2 Cannon.', 
              'price' => '250', 'quantity' => '53070'),
        array('id' => '5', 'name' => 'Rivets', 'description' => 'Rivets for the inner frame of the F-22.', 
              'price' => '350', 'quantity' => '542')
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

    // Get one supply
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
}
