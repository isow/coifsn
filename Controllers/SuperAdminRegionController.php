<?php

namespace coiffuresenegal\Controllers;

use coiffuresenegal\Form\RegionForm;
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

    public $regionForm;
    public $action;
    public $regionId = null;
    
    /**
     * @var RegionDao
     */
    public $regionDao;
    
    public function __construct() {
        $this->menu_array = array(
            'R�gions' => 'region',
            'Villes' => 'ville',
            'Salons' => 'salon',
            'Utilisateurs' => 'user',
            'Mod�les article' => 'article-model',
            'Articles' => 'article'
        );
        
        if(isset($_GET['action']) && $_GET['action']!="") {
            $this->action = $_GET['action'];
        } else {
            $this->action = 'render';
        }
        
        
        if(isset($_GET['id']) && $_GET['id']!="") {
            $this->regionId = $_GET['id'];
        }
        
        
        $this->regionDao = new RegionDao();
    }
    /**
     * Page displayed when a user arrives on your web application.
     * 
     */
    public function render() {        
        error_log($this->action);
        switch($this->action) {
            case 'get':
                    $this->regionListRender();
                break;
            case 'edit':
                    $this->regionEdit($this->regionId);
                break;
            case 'save':
                    $this->regionSave($this->regionId);
                break;
            case 'delete':
                    $this->regionDelete($this->regionId);
                break;
            default:
                    error_log("ICI C'EST PARIS!!");
                    $this->replaceContentFile("../View/SuperAdmin/Region/indexRegion.php");
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
        $editColumn->jsrenderer = 'function(row) { return $("<a/>").css({"padding-left": "250px", "text-align" : "right"}).html($("<i/>").css({"margin-right":"0px", "float":"right"}).attr({"class":"icon-edit", "title":"Modifier"}, {"title":"Supprimer"})).attr("href", "region/edit/" + row[\'id\']) }';

        $evoluGrid->addColumn($editColumn);
        
        
        $deleteColumn = new EvoluColumn('');
        $deleteColumn->jsrenderer = 'function(row) { return $("<a/>").css({"text-align" : "right"}).html($("<i/>").css({"margin-right":"30px", "float":"right"}).attr({"class":"icon-remove", "title":"Supprimer"})).attr("href", "region/delete/" + row[\'id\']) }';

        $evoluGrid->addColumn($deleteColumn);
        

        $evoluGrid->setTotalRowsCount(1);

        $filename = "regions.csv";

        $evoluGrid->output($output, $filename);
    }
    
    public function regionEdit($regionId = null) {
        $this->menu_array = array(
            'R�gions' => '../../region',
            'Villes' => '../../ville',
            'Salons' => '../../salon',
            'Utilisateurs' => '../../user',
            'Mod�les article' => '../../article-model',
            'Articles' => '../../article'
        );
        
        if($regionId===null)
            $actionUrl = "save";
        else
            $actionUrl = "../save/" . $regionId;
        
        $this->regionForm = new RegionForm($regionId, "region_edit_form", "POST", $actionUrl, null, $idArray = null);
        
        $this->replaceContentFile("../View/SuperAdmin/Region/editRegion.php");
        echo $this->toHtml();
    }
    
    
    public function regionDelete($regionId) {
        $obj = $this->regionDao->getById($regionId);
        
        if($obj && $this->regionDao->deleteRegion($obj)) {
            error_log("DELETED");
            $this->action = "index";
            echo '<script type="text/javascript">document.location.href="/superadmin/region";</script>';
            echo $this->render();
        } else {
            error_log("NOT DELETED");
            $this->action = "index";
            echo '<script type="text/javascript">document.location.href="/superadmin/region";</script>';
            echo $this->render();
        }
    }
    
    public function regionSave($regionId = null) {        
        if($regionId==null)
            $actionUrl = "save";
        else
            $actionUrl = "../save/" . $regionId;
        
        $this->regionForm = new RegionForm($regionId, "region_edit_form", "POST", $actionUrl, null, $idArray = null);
        
        if($this->regionForm->saveRegion($_POST, $_FILES)) {
            error_log("SAVED");
            $this->action = "index";
            echo '<script type="text/javascript">document.location.href="/superadmin/region";</script>';
            echo $this->render();
        } else {
            error_log("NOT SAVED");
            $this->action = "index";
            echo '<script type="text/javascript">document.location.href="/superadmin/region";</script>';
            echo $this->render();
        }
    }

}