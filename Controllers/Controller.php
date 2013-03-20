<?php

namespace coiffuresenegal\Controllers;

/**
 * Classe Controller
 * 
 * @author Ibrahima SOW
 */
class Controller {

    public $content = "";
    public $head = "";
    public $template = "";
    public $title = "Coiffure Sénégal";
    public $menu_array = array();
    public $pageController;

    public function __construct() {
        
    }

    public function addHeaderFile($type, $file) {
        switch ($type) {
            case "js":
                $this->head .= "<script type='text/javascript' src='" . $file . "'></script>";
                break;

            case "css":
                $this->head .= "<link type='text/css' rel='stylesheet' href='" . $file . "' />";
                break;
        }
    }

    public function addContentFile($file) {
        ob_start();
        global $scope;
        $scope = $this;
        include $file;
        $output = ob_get_clean();
        $this->content .= $output;
    }

    /**
     * Remplace le bloc 'content' par le contenu du fichier
     * le scope est inclu donc $this est pris en compte
     * 
     * @return $this->content (interprété)
     * @global type $scope
     * @param type $file 
     */
    public function replaceContentFile($file) {
        ob_start();
        global $scope;
        $scope = $this;
        include $file;
        $output = ob_get_clean();
        $this->content = $output;
    }

    public function addTitle($title) {
        $this->title = $title;
    }

    public function headConctruct() {
        $this->head .= '<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">';
        $this->head .= '<meta name="author" content="Ibrahima Alpha SOW">';
        $this->head .= '<meta name="copyright" content="Ibrahima Alpha SOW">';
        $this->head .= '<meta name="description" lang="fr" content="Toute la coiffure du Sénégal.">';
        $this->head .= '<meta name="expires" content="never">';
        $this->head .= '<meta name="keywords" content="coiffure, salon, senegal, sénégal, tresses">';
        $this->head .= '<meta name="rating" content="general">';
        $this->head .= '<meta name="rev" content="sowbiba@hotmail.com">';
        $this->head .= '<meta name="revisit-after" content="2 days">';
        $this->head .= '<meta name="robots" content="all">';
        $this->head .= '<meta name="subject" content="Coiffure Sénégal">';

        $this->head .= '<meta http-equiv="robots" content="all">';
        $this->head .= '<meta http-equiv="Content-Style-Type" content="text/css">';


        $this->head .= '<link rel="icon" type="image/png" href="/images/favicon.png">';
        $this->head .= '<link href="/js/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">';
        $this->head .= '<link type="text/css" rel="stylesheet" href="/css/style.css" />';
        $this->head .= '<title>' . $this->title . '</title>';
        $this->head .= '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
        $this->head .= '<script type="text/javascript" src="/js/jquery.js"></script>';
        $this->head .= '<script src="/js/bootstrap/js/bootstrap.min.js"></script>';
        $this->head .= '<script src="/js/evolugrid.js"></script>';
        $this->head .= '<script type="text/javascript" src="/js/underscore.js"></script>';
        $this->head .= '<script type="text/javascript" src="/js/backbone.js"></script>';
        $this->head .= '<script type="text/javascript" src="/js/main.js"></script>';
        $this->head .= '<script language="javascript" type="text/javascript" src="/js/tiny_mce/tiny_mce.js"></script>';
		$this->head .= '<script language="javascript" type="text/javascript">';
		$this->head .= 'tinyMCE.init({';
        		//$this->head .= 'theme : "advanced",';
        		//$this->head .= 'mode : "textareas"';
        		$this->head .= 'mode : "textareas",';
        		$this->head .= 'plugins : "paste",';
        		$this->head .= 'theme : "advanced",';
        		//$this->head .= 'language: "fr",';
        		$this->head .= 'theme_advanced_buttons1: "bold,italic,underline,|,undo,redo,|,outdent,indent,|,forecolor,|,bullist,numlist,|,fontsizeselect,|,link,unlink,|,code",';
        		$this->head .= 'theme_advanced_buttons2: "",';
        		$this->head .= 'theme_advanced_buttons3: ""';
		$this->head .= '});';
		$this->head .= '</script>';

        //return $this->head;
    }

    public function contentConstruct() {
        //return $this->content;
    }

    /**
     * Construit la page ...
     * 
     * @return type 
     */
    public function toHtml() {
        $this->headConctruct();
        $this->contentConstruct();

        $this->template .= '<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">';
        $this->template .= '<head>';
        $this->template .= $this->head;
        $this->template .= '</head>';
        $this->template .= '<body>';
        $this->template .= '<div id="page">';
        $this->template .= '<div id="nav_bar">';
        $this->template .= '<div id="nav_bar_inner">';
        $this->template .= '<ul class="menu" id="menu">';
        foreach ($this->menu_array as $key => $value) {
            $this->template .= '<li>';
            $this->template .= '<a href="' . $value . '">' . $key . '</a>';
            $this->template .= '</li>';
        }
        $this->template .= '</ul>';
        $this->template .= '</div>';
        $this->template .= '</div>';
        $this->template .= '<div class="container" id="container">';
        $this->template .= '<div class="row">';
        $this->template .= '<div id="content" class="span12">';
            $this->template .= '<div id="subcontent" class="subcontent">';
                $this->template .= $this->content;
            $this->template .= '</div>'; //fin subcontent
        $this->template .= '</div>'; //fin content
        $this->template .= '</div>'; //fin row
        $this->template .= '</div>'; //fin container
        $this->template .= '</div>'; //fin page
        $this->template .= '</body>';
        $this->template .= '</html>';

        return $this->template;
    }

}

?>
