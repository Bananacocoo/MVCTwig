<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Offres
 *
 * @author 1703728
 */
class Offres
{

    private $_id;
    private $_title;
    private $_description;

    function __construct(array $offres)
    {
        $this->set_title($offres['title']);
        $this->set_description($offres['description']);
        if (isset($offres['id']))
            $this->set_id($offres['id']);
    }

    public function get_title()
    {
        return $this->_title;
    }

    function get_description()
    {
        return $this->_description;
    }

    function set_title($_title)
    {
        $this->_title = $_title;
    }

    function set_description($_description)
    {
        $this->_description = $_description;
    }

    /**
     * Get the value of _id
     */
    public function get_id()
    {
        return $this->_id;
    }

    /**
     * Set the value of _id
     *
     */
    public function set_id($_id)
    {
        $this->_id = $_id;
    }
}
