<?php

namespace coiffuresenegal\Controllers;

use coiffuresenegal\Form\ArticleForm;
use coiffuresenegal\Dao\RegionDao;
use EvoluGrid\EvoluGrid;
use EvoluGrid\EvoluColumn;

/**
 * This is the controller in charge of managing the first page of the application.
 * 
 * @author Ibrahima SOW
 * @Component
 */
class SuperAdminRegionController extends Controller {

    public $articleForm;
    public $action;
    
    /**
     * @var RegionDao
     */
    public $regionDao;
    
    public function __construct() {
        $this->menu_array = array(
            'Régions' => 'region',
            'Villes' => 'town',
            'Salons' => 'salon',
            'Utilisateurs' => 'user',
            'Modèles article' => 'article-model',
            'Articles' => 'article'
        );
        
        if(isset($_GET['action']) && $_GET['action']!="") {
            $this->action = $_GET['action'];
        } else $this->action = 'render';
        
        
        $this->regionDao = new RegionDao();
    }
    /**
     * Page displayed when a user arrives on your web application.
     * 
     */
    public function render() {        
        switch($this->action) {
            case 'get':
                    $this->regionListRender();
                break;
            default:
                    $this->replaceContentFile("../View/SuperAdmin/indexRegion.php");
                    return $this->toHtml();
                break;
        }
    }
    
    
    public function regionListRender() {
        $output = 'json';
        $evoluGrid = new EvoluGrid();
        
        $rows = $this->regionDao->getRegionWithPager();
        
        foreach ($rows as $row) {
            $obj = array();
            
            /*
             *  'id_region',
                'nom_region',
                'image',
                'banniere',
                'notice',
                'presentation',
                'position',
                'actif',
                'tag',
                'created_at',
                'updated_at'
             */
            $obj['id'] = $row->id_region;
            $obj['name'] = $row->nom_region;
            $obj['image'] = "<img src='/images/regions/" . $row->image . "' alt='" .$row->nom_region. "' title='" .$row->nom_region. "' class='listImage' />";

            $evoluGrid->addRow($obj);
        }
        $checkColumn = new EvoluColumn('');
        $checkColumn->jsrenderer = 'function(row) { return "<input class=\'selectRegion\' type=\'checkbox\' name=\'" + row["id"] + "\' value=\'" + row["id"] + "\'>" }';

        $evoluGrid->addColumn($checkColumn);


        $evoluGrid->addColumn(new EvoluColumn("", "image"));
        $evoluGrid->addColumn(new EvoluColumn("R&eacute;gion", "name"));
        
        $editColumn = new EvoluColumn('');
        $editColumn->jsrenderer = 'function(row) { return $("<a/>").css({"padding-left": "160px", "text-align" : "right"}).html($("<i/>").css({"margin-right":"30px", "float":"right"}).attr("class","icon-edit")).attr("href", "region/edit?id=" + row[\'id\']) }';

        $evoluGrid->addColumn($editColumn);

        $evoluGrid->setTotalRowsCount(1);

        $filename = "regions.csv";

        $evoluGrid->output($output, $filename);
    }

}