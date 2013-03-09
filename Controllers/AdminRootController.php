<?php

namespace coiffuresenegal\Controllers;
use coiffuresenegal\Dao\RegionDao;

/**
 * This is the controller in charge of managing the first page of the application.
 * 
 * @author Ibrahima SOW
 * @Component
 */
class AdminRootController extends Controller {

    public $regions;
    
    /**
     *
     * @var RegionDao
     */
    public $regionDao;
    
    public function __construct() {
        
        $this->regionDao = new RegionDao();
        
        $this->menu_array = array(
            'Articles' => 'article',
            'Mon compte' => 'account',
            'Statistiques' => 'stats'
        );
    }
    /**
     * Page displayed when a user arrives on your web application.
     * 
     */
    public function render() {
        $this->regions = $this->regionDao->getList();
        
        $this->addContentFile("../View/Admin/index.php");
        return $this->toHtml();
    }

}