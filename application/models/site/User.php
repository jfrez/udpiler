<?php
class User extends CI_Model {

    var $email   = '';
    var $password = '';
    var $player = 0;
    

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    

}
