<?php

namespace coiffuresenegal\Controllers;

use coiffuresenegal\Form\VilleForm;
use coiffuresenegal\Dao\VilleDao;
use EvoluGrid\EvoluGrid;
use EvoluGrid\EvoluColumn;

/**
 * This is the controller in charge of managing the first page of the application.
 * 
 * @author Ibrahima SOW
 * @Component
 */
class SuperAdminVilleController extends Controller {

    public $villeForm;
    public $action;
    public $villeId = null;
    
    /**
     * @var VilleDao
     */
    public $villeDao;
    
    public function __construct() {
        $this->menu_array = array(
            'Régions' => 'region',
            'Villes' => 'ville',
            'Salons' => 'salon',
            'Utilisateurs' => 'user',
            'Modèles article' => 'article-model',
            'Articles' => 'article'
        );
        
        if(isset($_GET['action']) && $_GET['action']!="") {
            $this->action = $_GET['action'];
        } else {
            $this->action = 'render';
        }
        
        
        if(isset($_GET['id']) && $_GET['id']!="") {
            $this->villeId = $_GET['id'];
        }
        
        
        $this->villeDao = new VilleDao();
    }
    /**
     * Page displayed when a user arrives on your web application.
     * 
     */
    public function render() {        
        error_log($this->action);
        switch($this->action) {
            case 'get':
                    $this->villeListRender();
                break;
            case 'edit':
                    $this->villeEdit($this->villeId);
                break;
            case 'save':
                    $this->villeSave($this->villeId);
                break;
            case 'delete':
                    $this->villeDelete($this->villeId);
                break;
            default:
                    error_log("ICI C'EST PARIS!!");
                    $this->replaceContentFile("../View/SuperAdmin/Ville/indexVille.php");
                    return $this->toHtml();
                break;
        }
    }
    
    
    public function villeListRender() {
        $output = 'json';
        $evoluGrid = new EvoluGrid();
        
        $rows = $this->villeDao->getVilleWithPager();
        
        foreach ($rows as $row) {
            $obj = array();
            
            /*
             *  'id_ville',
                'nom_ville',
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
            $obj['id'] = $row->id_ville;
            $obj['name'] = $row->nom_ville;
            $obj['image'] = "<img src='/images/villes/" . $row->image . "' alt='" .$row->nom_ville. "' title='" .$row->nom_ville. "' class='listImage' />";

            $evoluGrid->addRow($obj);
        }
        $checkColumn = new EvoluColumn('');
        $checkColumn->jsrenderer = 'function(row) { return "<input class=\'selectVille\' type=\'checkbox\' name=\'" + row["id"] + "\' value=\'" + row["id"] + "\'>" }';

        $evoluGrid->addColumn($checkColumn);


        $evoluGrid->addColumn(new EvoluColumn("", "image"));
        $evoluGrid->addColumn(new EvoluColumn("Ville", "name"));
        
        $editColumn = new EvoluColumn('');
        $editColumn->jsrenderer = 'function(row) { return $("<a/>").css({"padding-left": "250px", "text-align" : "right"}).html($("<i/>").css({"margin-right":"0px", "float":"right"}).attr({"class":"icon-edit", "title":"Modifier"}, {"title":"Supprimer"})).attr("href", "ville/edit/" + row[\'id\']) }';

        $evoluGrid->addColumn($editColumn);
        
        
        $deleteColumn = new EvoluColumn('');
        $deleteColumn->jsrenderer = 'function(row) { return $("<a/>").css({"text-align" : "right"}).html($("<i/>").css({"margin-right":"30px", "float":"right"}).attr({"class":"icon-remove", "title":"Supprimer"})).attr("href", "ville/delete/" + row[\'id\']) }';

        $evoluGrid->addColumn($deleteColumn);
        

        $evoluGrid->setTotalRowsCount(1);

        $filename = "villes.csv";

        $evoluGrid->output($output, $filename);
    }
    
    public function villeEdit($villeId = null) {
        $this->menu_array = array(
            'Régions' => '../../region',
            'Villes' => '../../ville',
            'Salons' => '../../salon',
            'Utilisateurs' => '../../user',
            'Modèles article' => '../../article-model',
            'Articles' => '../../article'
        );
        
        if($villeId===null)
            $actionUrl = "save";
        else
            $actionUrl = "../save/" . $villeId;
        
        $this->villeForm = new VilleForm($villeId, "ville_edit_form", "POST", $actionUrl, null, $idArray = null);
        
        $this->replaceContentFile("../View/SuperAdmin/Ville/editVille.php");
        echo $this->toHtml();
    }
    
    
    public function villeDelete($villeId) {
        $obj = $this->villeDao->getById($villeId);
        
        if($obj && $this->villeDao->deleteVille($obj)) {
            error_log("DELETED");
            $this->action = "index";
            echo '<script type="text/javascript">document.location.href="/superadmin/ville";</script>';
            echo $this->render();
        } else {
            error_log("NOT DELETED");
            $this->action = "index";
            echo '<script type="text/javascript">document.location.href="/superadmin/ville";</script>';
            echo $this->render();
        }
    }
    
    public function villeSave($villeId = null) {        
        if($villeId==null)
            $actionUrl = "save";
        else
            $actionUrl = "../save/" . $villeId;
        
        $this->villeForm = new VilleForm($villeId, "ville_edit_form", "POST", $actionUrl, null, $idArray = null);
        
        if($this->villeForm->saveVille($_POST, $_FILES)) {
            error_log("SAVED");
            $this->action = "index";
            echo '<script type="text/javascript">document.location.href="/superadmin/ville";</script>';
            echo $this->render();
        } else {
            error_log("NOT SAVED");
            $this->action = "index";
            echo '<script type="text/javascript">document.location.href="/superadmin/ville";</script>';
            echo $this->render();
        }
    }

}