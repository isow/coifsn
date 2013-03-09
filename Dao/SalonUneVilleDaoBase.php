<?php

/*
 * This file has been automatically generated by TDBM.
 * DO NOT edit this file, as it might be overwritten.
 * If you need to perform changes, edit the SalonUneVilleDao class instead!
 */

namespace coiffuresenegal\Dao;

use Database\TDBM\TDBMService;

/**
 * The SalonUneVilleDaoBase class will maintain the persistance of coiffuresenegal\Dao\Bean\SalonUneVilleBean class into the salon_une_ville table.
 * 
 */
class SalonUneVilleDaoBase extends DaoCommon implements DAOInterface {

    public $tableName = "salon_une_region";
    public $tablePrimaryKey = "ID_salon_une_ville";
    public $tableColumns = array(
        'ID_salon_une_ville',
        'ID_salon',
        'ID_ville',
        'position',
        'created_at',
        'updated_at'
    );
    
    /**
     * @var TDBMService
     */
    protected $tdbmService;

    public function __construct() {
        $this->setTdbmService(new TDBMService());
    }
    
    /**
     * Sets the TDBM service used by this DAO.
     *
     * @Property
     * @Compulsory
     * @param TDBMService $tdbmService
     */
    public function setTdbmService(TDBMService $tdbmService) {
        $this->tdbmService = $tdbmService;
    }
    

    /**
	 * Return a new instance of coiffuresenegal\Dao\Bean\SalonUneVilleBean object, that will be persisted in database.
	 *
	 * @return coiffuresenegal\Dao\Bean\SalonUneVilleBean
	 */
	public function create() {
		return $this->tdbmService->getNewObject('salon_une_ville', true, 'coiffuresenegal\Dao\Bean\SalonUneVilleBean');
	}
	
	/**
	 * Persist the coiffuresenegal\Dao\Bean\SalonUneVilleBean instance
	 *
	 */
	public function save($obj) {
		$obj->save();
	}

	/**
	 * Get all SalonUneVille records. 
	 *
	 * @return array<coiffuresenegal\Dao\Bean\SalonUneVilleBean>
	 */
	public function getList() {
		return $this->tdbmService->getObjects('salon_une_ville', null, null, null, null, 'coiffuresenegal\Dao\Bean\SalonUneVilleBean');
	}
	
	/**
	 * Get coiffuresenegal\Dao\Bean\SalonUneVilleBean specified by its ID (its primary key)
	 * If the primary key does not exist, an exception is thrown.
	 *
	 * @param string $id
	 * @param boolean $lazyLoading If set to true, the object will not be loaded right away. Instead, it will be loaded when you first try to access a method of the object.
	 * @return coiffuresenegal\Dao\Bean\SalonUneVilleBean
	 * @throws TDBMException
	 */
	public function getById($id, $lazyLoading = false) {
		return $this->tdbmService->getObject('salon_une_ville', $id, 'coiffuresenegal\Dao\Bean\SalonUneVilleBean', $lazyLoading);
	}
	
	/**
	 * Deletes the coiffuresenegal\Dao\Bean\SalonUneVilleBean passed in parameter.
	 *
	 * @param coiffuresenegal\Dao\Bean\SalonUneVilleBean $obj
	 */
	public function delete($obj) {
		$this->tdbmService->deleteObject($obj);
	}
	
	/**
	 * Get a list of coiffuresenegal\Dao\Bean\SalonUneVilleBean specified by its filters.
	 *
	 * @param mixed $filterBag The filter bag (see TDBMService::getObjects for complete description)
	 * @param mixed $orderbyBag The order bag (see TDBMService::getObjects for complete description)
	 * @param integer $from The offset
	 * @param integer $limit The maximum number of rows returned
	 * @return array<coiffuresenegal\Dao\Bean\SalonUneVilleBean>
	 */
	protected function getListByFilter($filterBag=null, $orderbyBag=null, $from=null, $limit=null) {
		return $this->tdbmService->getObjects('salon_une_ville', $filterBag, $orderbyBag, $from, $limit, 'coiffuresenegal\Dao\Bean\SalonUneVilleBean');
	}

	/**
	 * Get a single coiffuresenegal\Dao\Bean\SalonUneVilleBean specified by its filters.
	 *
	 * @param mixed $filterBag The filter bag (see TDBMService::getObjects for complete description)
	 * @return coiffuresenegal\Dao\Bean\SalonUneVilleBean
	 */
	protected function getByFilter($filterBag=null) {
		return $this->tdbmService->getObject('salon_une_ville', $filterBag, 'coiffuresenegal\Dao\Bean\SalonUneVilleBean');
	}
	

	/**
	 * Return a new instance of coiffuresenegal\Dao\Bean\SalonUneVilleBean object, that will be persisted in database.
	 *
	 * @return coiffuresenegal\Dao\Bean\SalonUneVilleBean
	 */
	public function getNewSalonUneVille() {
		return $this->create();
	}

	/**
	 * Persist the coiffuresenegal\Dao\Bean\SalonUneVilleBean instance
	 * (old function to keep compatibility with TDBM < 2.3)
	 *
	 */
	public function saveSalonUneVille($obj) {
		$this->save($obj);
	}
	
	/**
	 * Get all SalonUneVille records. 
	 *
	 * @return array<coiffuresenegal\Dao\Bean\SalonUneVilleBean>
	 */
	public function getSalonUneVilleList() {
		return $this->getList();
	}
	
	/**
	 * Get coiffuresenegal\Dao\Bean\SalonUneVilleBean specified by its ID (its primary key)
	 * If the primary key does not exist, an exception is thrown.
	 *
	 * @param string $id
	 * @param boolean $lazyLoading If set to true, the object will not be loaded right away. Instead, it will be loaded when you first try to access a method of the object.
	 * @return coiffuresenegal\Dao\Bean\SalonUneVilleBean
	 * @throws TDBMException
	 */
	public function getSalonUneVilleById($id, $lazyLoading = false) {
		return $this->getById($id, $lazyLoading);
	}
	
	/**
	 * Deletes the coiffuresenegal\Dao\Bean\SalonUneVilleBean passed in parameter.
	 *
	 * @param coiffuresenegal\Dao\Bean\SalonUneVilleBean $obj
	 */
	public function deleteSalonUneVille($obj) {
		$this->delete($obj);
	}
	
	/**
	 * Get a list of coiffuresenegal\Dao\Bean\SalonUneVilleBean specified by its filters.
	 *
	 * @param mixed $filterBag The filter bag (see TDBMService::getObjects for complete description)
	 * @param mixed $orderbyBag The order bag (see TDBMService::getObjects for complete description)
	 * @param integer $from The offset
	 * @param integer $limit The maximum number of rows returned
	 * @return array<coiffuresenegal\Dao\Bean\SalonUneVilleBean>
	 */
	protected function getSalonUneVilleListByFilter($filterBag=null, $orderbyBag=null, $from=null, $limit=null) {
		return $this->getListByFilter($filterBag, $orderbyBag, $from, $limit);
	}

	/**
	 * Get a single coiffuresenegal\Dao\Bean\SalonUneVilleBean specified by its filters.
	 *
	 * @param mixed $filterBag The filter bag (see TDBMService::getObjects for complete description)
	 * @return coiffuresenegal\Dao\Bean\SalonUneVilleBean
	 */
	protected function getSalonUneVilleByFilter($filterBag=null) {
		return $this->getByFilter($filterBag);
	}
	
}
?>