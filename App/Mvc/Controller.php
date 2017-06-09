<?php
/**
 * Description of Controller
 * @author baiadori
 */
namespace App\Mvc;

class Controller {
    // public function Index(){echo 'Ola Mundo';}
    protected $View;

    public function __construct() {
        $this->View = new View();
    }
}
