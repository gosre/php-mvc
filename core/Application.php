<?php

namespace core;

/**
 * Class Application
 * Represents the main initializer class of our mvc framework
 * @package core
 */
class Application {

    /** @var string The controller (if set in the URL) */
    private $controller = null;

    /** @var string The action (if set in the URL - and only used if the controller was set) */
    private $action = null;

    /**
     * Application constructor.
     */
    function __construct() {
        $this->parseUrl();

        if (isset($this->controller)) {
            //TODO check for valid controller
                //TODO check for action and distribute
        } else {
            //TODO do index
        }
    }

    /**
     * Parses the current URL to find a controller or action
     */
    private function parseUrl() {
        //$parts = parse_url()
        $url = $_SERVER['REQUEST_URI']; //TODO gotta write some htaccess
        echo $_GET['controller']."<br>";
        echo $_GET['action'];
    }
}