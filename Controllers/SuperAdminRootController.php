<?php

namespace coiffuresenegal\Controllers;

/**
 * This is the controller in charge of managing the first page of the application.
 * 
 * @author Ibrahima SOW
 * @Component
 */
class SuperAdminRootController extends Controller {

    public function __construct() {
        $this->menu_array = array(
            'Régions' => 'region',
            'Villes' => 'ville',
            'Salons' => 'salon',
            'Utilisateurs' => 'user',
            'Modèles article' => 'article-model',
            'Articles' => 'article'
        );
    }
    /**
     * Page displayed when a user arrives on your web application.
     * 
     */
    public function render() {        
        if(isset($_GET['p'])) {
            $page = $_GET['p'];
            switch ($page) {
                case "region":
                    //Page Region
                    $pageController = new SuperAdminRegionController();
                    break;
                
                case "ville":
                    //Page Ville
                    $pageController = new SuperAdminVilleController();
                    break;

                default:
                    //Retour a la page accueil
                    $this->addContentFile("../View/SuperAdmin/index.php");
                    return $this->toHtml();
                    break;
            }
            
            return $pageController->render();
        } else {
        	$this->addContentFile("../View/SuperAdmin/index.php");
        	return $this->toHtml();
        }
    }

}