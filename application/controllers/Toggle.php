<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Toggle
 */
class Toggle extends Application {

    public function index() {
        $origin = $_SERVER['HTTP_REFERER'];
        $role = $this->session->userdata('userrole');
        if ($role == 'user')
        {
            $role = 'worker';
        }
        else
        if($role == 'worker')
        {
            $role = 'admin';
        }
        else
        {
            $role = 'user';
        }
        $this->session->set_userdata('userrole', $role);
        redirect($origin);
    }

}
