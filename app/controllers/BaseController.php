<?php

abstract class BaseController {
    public $provider;

    function __construct() {
        $this->provider = new WPDataAccessor();
    }

    abstract function view($f3, $args);
}