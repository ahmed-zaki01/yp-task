<?php

class App
{
    // controller
    protected $controller = "HomeController";
    // method 
    protected $action = "index";
    // params 
    protected $params = [];

    public function __construct()
    {
        $this->prepareURL($_SERVER['REQUEST_URI']);
        // invoke controller and method
        $this->render();
    }



    /**
     * extract controller and method and all parameters
     * @param string $url -> request from url path 
     * @return 
     */
    private function prepareURL($url)
    {
        $url = trim($url, "/");
        if (!empty($url)) {
            $url = explode('/', $url);

            // define controller 
            $this->controller = isset($url[2]) ? ucwords($url[2]) . "Controller" : "HomeController";

            // define method 
            $this->action = isset($url[3]) ? $url[3] : "index";
            // define parameters 
            unset($url[0], $url[1], $url[2], $url[3]);

            $this->params = !empty($url) ? array_values($url) : [];
        }
    }



    /**
     * render controller and method and send parameters 
     * @return function 
     */

    private function render()
    {
        // check if controller is exist
        if (class_exists($this->controller)) {
            $controller = new $this->controller;
            // check if method is exist
            if (method_exists($controller, $this->action)) {
                call_user_func_array([$controller, $this->action], $this->params);
            } else {
                // echo "Method : " . $this->action ." does not Exist";
                new View('error');
            }
        } else {
            // echo "Class : ".$this->controller." Not Found";
            new View('error');
        }
    }
}
