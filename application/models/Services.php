<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Services extends CI_Model {

    // array that holds all of the service recipies
    var $services = array(
        array('id' => '1', 'name' => 'Preparation',
              'description' => 'Top off plane with fuel and oil. Takes 50 gallons of fuel, and 12 gallons of oil.', 
              'supplies' => array('Fuel' => '50', 'Oil' => '12')),
            array('id' => '2', 'name' => 'Maintenence',
              'description' => 'Check oil levels and overall wear on rivets, airframe, eqiupment, engine, and plane coating. Takes 20 gallons of oil and 25 rivets.', 
              'supplies' => array('Oil' => '20', 'Rivets' => '25')),
            array('id' => '3', 'name' => 'Rearm for Air Combat',
              'description' => 'Add missles and ammo to rearm. Takes 6 missles and 480 rounds of ammo.', 
              'supplies' => array('Missles' => '6', 'Ammo' + '480'))          
        );

    // Default Constructor
    public function __construct()
    {
            parent::__construct();
    }

    // Grab all of the service recipe
    public function get_all()
    {
        return $this->services;
    }

    // Get one service recipe
    public function get_one($id)
    {
        // find the correct service id, return it
        foreach($this->services as $service)
        {
            if($service['id'] == $id)
            {
                return $service;
            }
        }
    }
}
