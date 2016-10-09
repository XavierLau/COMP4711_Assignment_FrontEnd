<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Logs extends CI_Model {

    // array that holds all of the logged data    
    var $logs = array(
        array('id' => '1', 'name' => 'Log_Transaction_Inv_1', 'type' => 'inventory', 'date' => '18/10/16',
                  'totalprice' => '5000', 'items' => array('item1' => 'rivets', 'item2' => 'ammo')),
        array('id' => '2', 'name' => 'Log_Transaction_Sell_1', 'type' => 'sales', 'date' => '24/10/16',
                  'totalprice' => '99999999', 'items' => array('item1' => 'Limited Edition Pikmin Lithograph')),
        array('id' => '3', 'name' => 'Log_Transaction_Prod_1', 'type' => 'production', 'date' => '20/10/16',
                  'totalprice' => '666', 'items' => array('item1' => 'How to Code PHP: Webpage Hell Vol. 42'))
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
    
    /**
     * Grab the sum of all transaction log prices
     * @return type 
     */
    public function get_total_price()
    {
        $totalprice = 0;
        
        // grab all logs and return the sum of prices
        foreach($this->logs as $log)
        {
          $totalprice += $log['price'];
        }
        
        return $totalprice;
    }
    
     /** Grab the sum of all transaction log prices
     * @param type $type A 'sales', 'inventory', or 'production' log type.
     * @return type 
     */
    public function get_total_type_price($type)
    {
        $totalprice = 0;
        
        // grabs logs with the specified type, get their total prices
        foreach($this->logs as $log)
        {
            if($log['type'] == $type)
            {
                $totalprice += $log['price'];
            }
        }
        
        return $totalprice;
    }
    
    /**
     *  Grabs an array of items from that transaction log.
     * @param type $id ID of the transaction log
     */
    public function get_log_items($id)
    {
        // grabs logs with the specified type, get their items
        foreach($this->logs as $log)
        {
            if($log['id'] == $id)
            {
                return $log['items'];
            }
        }
    }
}
