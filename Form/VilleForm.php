<?php

/*
 * This file has been automatically generated by TDBM.
 * You can edit this file as it will not be overwritten.
 */

namespace coiffuresenegal\Form;

use coiffuresenegal\Dao\VilleDao;

/**
 * The VilleDao class will maintain the persistance of coiffuresenegal\Dao\Bean\VilleBean class into the ville table.
 *
 * @Component
 * @dbTable ville
 */
class VilleForm extends Form {

    public $isModificationForm = false;

    /**
     * @var VilleDao
     */
    public $villeDao;

    public $villeObject;

    function __construct($idVille = null, $name = null, $method=null, $action=null, $onsubmit = null, $idArray = null) {
        $this->villeDao = new VilleDao();

        if ($idVille == null) {
            parent::__construct("create", $name, $method, $action, $onsubmit, null);
            
                    
            $this->formFields = array(
                array("type" => "text", "name" => "nom_ville", "value" => "", "label" => "Nom de la ville"),
                array("type" => "file", "name" => "image", "value" => "", "label" => "Image"),
                array("type" => "file", "name" => "banniere", "value" => "", "label" => "Banni�re"),
                array("type" => "textarea", "name" => "notice", "value" => "", "label" => "R�sum�"),
                array("type" => "textarea", "name" => "presentation", "value" => "", "label" => "Pr�sentation"),
                array("type" => "text", "name" => "tag", "value" => "", "label" => "Tag"),
                array("type" => "integer", "name" => "position", "value" => "", "label" => "Position"),
                array("type" => "boolean", "name" => "actif", "value" => "true", "label" => "Activer ?")
            );
            
        } else {
            $this->isModificationForm = true;
            parent::__construct("modify", $name, $method, $action, $onsubmit, array('id_ville', $idVille));

            $this->villeObject = $this->villeDao->getById($idVille);

            
            
            $this->formFields = array(
                array("type" => "text", "name" => "nom_ville", "value" => $this->villeObject->getNomVille(), "label" => "Nom de la ville"),
                array("type" => "file", "name" => "image", "value" => $this->villeObject->getImage(), "label" => "Image"),
                array("type" => "file", "name" => "banniere", "value" => $this->villeObject->getBanniere(), "label" => "Banni�re"),
                array("type" => "textarea", "name" => "notice", "value" => $this->villeObject->getNotice(), "label" => "R�sum�"),
                array("type" => "textarea", "name" => "presentation", "value" => $this->villeObject->getPresentation(), "label" => "Pr�sentation"),
                array("type" => "text", "name" => "tag", "value" => $this->villeObject->getTag(), "label" => "Tag"),
                array("type" => "text", "name" => "position", "value" => $this->villeObject->getPosition(), "label" => "Position"),
                array("type" => "boolean", "name" => "actif", "value" => $this->villeObject->getActif(), "label" => "Activer ?")
            );
        }
    }
    
    
    public function saveVille($postValues, $fileValues) {
        if($this->isModificationForm)
            $villeObject = $this->villeDao->getById($postValues['id_ville']);
        else
            $villeObject = $this->villeDao->getNewVille();
        
        return parent::save($this->formFields, $postValues, $fileValues, $this->villeDao, $villeObject, "/images/villes/");
        
    }

}