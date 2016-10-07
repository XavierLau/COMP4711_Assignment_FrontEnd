<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Logs extends CI_Model {

    // array that holds all of the logged data    
    var $logs = array(
        array('id' => '1') // !!!!WIP!!!!
        );

    // Default Constructor
    public function __construct()
    {
            parent::__construct();
    }

    // Grab all of the stored transaction logs
    public function get_all()
    {
        return $this->logs;
    }

    // Get one logged transaction
    public function get_one($id)
    {
        // find the correct id, return it
        foreach($this->logs as $log)
        {
            if($log['id'] == $id)
            {
                return $log;
            }
        }
    }
}
