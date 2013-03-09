<?php

namespace coiffuresenegal\Controllers;

/**
 * This is the controller in charge of managing the first page of the application.
 * 
 * @author Ibrahima SOW
 * @Component
 */
class RootController extends Controller {

    public $racine = "/coifsn/";
    
    /**
     * Page displayed when a user arrives on your web application.
     * 
     */
    public function render() {
        if (strpos($_SERVER['REQUEST_URI'], '404.php')) {
            $taburl = explode($_SERVER['REQUEST_URI'], "/404.php");
            $this->racine = $taburl[0];
            
            $this->addContentFile("../View/404.php");
            return $this->toHtml();
        } else {
            $this->addContentFile("View/index.php");
            return $this->toHtml();
        }
    }

}