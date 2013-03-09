<?php

/*
 * This file has been automatically generated by TDBM.
 * DO NOT edit this file, as it might be overwritten.
 * If you need to perform changes, edit the SalonDao class instead!
 */

namespace coiffuresenegal\Dao;

use Database\TDBM\TDBMService;

/**
 * The SalonDaoBase class will maintain the persistance of coiffuresenegal\Dao\Bean\SalonBean class into the salon table.
 * 
 */
class SalonDaoBase extends DaoCommon implements DAOInterface {

    public $tableName = "salon";
    public $tablePrimaryKey = "ID_salon";
    public $tableColumns = array(
        'ID_salon',
        'ID_ville',
        'nom_salon',
        'image',
        'banniere',
        'notice',
        'presentation',
        'position',
        'actif',
        'tag',
        'created_at',
        'updated_at',
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
	 * Return a new instance of coiffuresenegal\Dao\Bean\SalonBean object, that will be persisted in database.
	 *
	 * @return coiffuresenegal\Dao\Bean\SalonBean
	 */
	public function create() {
		return $this->tdbmService->getNewObject('salon', true, 'coiffuresenegal\Dao\Bean\SalonBean');
	}
	
	/**
	 * Persist the coiffuresenegal\Dao\Bean\SalonBean instance
	 *
	 */
	public function save($obj) {
		$obj->save();
	}

	/**
	 * Get all Salon records. 
	 *
	 * @return array<coiffuresenegal\Dao\Bean\SalonBean>
	 */
	public function getList() {
		return $this->tdbmService->getObjects('salon', null, null, null, null, 'coiffuresenegal\Dao\Bean\SalonBean');
	}
	
	/**
	 * Get coiffuresenegal\Dao\Bean\SalonBean specified by its ID (its primary key)
	 * If the primary key does not exist, an exception is thrown.
	 *
	 * @param string $id
	 * @param boolean $lazyLoading If set to true, the object will not be loaded right away. Instead, it will be loaded when you first try to access a method of the object.
	 * @return coiffuresenegal\Dao\Bean\SalonBean
	 * @throws TDBMException
	 */
	public function getById($id, $lazyLoading = false) {
		return $this->tdbmService->getObject('salon', $id, 'coiffuresenegal\Dao\Bean\SalonBean', $lazyLoading);
	}
	
	/**
	 * Deletes the coiffuresenegal\Dao\Bean\SalonBean passed in parameter.
	 *
	 * @param coiffuresenegal\Dao\Bean\SalonBean $obj
	 */
	public function delete($obj) {
		$this->tdbmService->deleteObject($obj);
	}
	
	/**
	 * Get a list of coiffuresenegal\Dao\Bean\SalonBean specified by its filters.
	 *
	 * @param mixed $filterBag The filter bag (see TDBMService::getObjects for complete description)
	 * @param mixed $orderbyBag The order bag (see TDBMService::getObjects for complete description)
	 * @param integer $from The offset
	 * @param integer $limit The maximum number of rows returned
	 * @return array<coiffuresenegal\Dao\Bean\SalonBean>
	 */
	protected function getListByFilter($filterBag=null, $orderbyBag=null, $from=null, $limit=null) {
		return $this->tdbmService->getObjects('salon', $filterBag, $orderbyBag, $from, $limit, 'coiffuresenegal\Dao\Bean\SalonBean');
	}

	/**
	 * Get a single coiffuresenegal\Dao\Bean\SalonBean specified by its filters.
	 *
	 * @param mixed $filterBag The filter bag (see TDBMService::getObjects for complete description)
	 * @return coiffuresenegal\Dao\Bean\SalonBean
	 */
	protected function getByFilter($filterBag=null) {
		return $this->tdbmService->getObject('salon', $filterBag, 'coiffuresenegal\Dao\Bean\SalonBean');
	}
	

	/**
	 * Return a new instance of coiffuresenegal\Dao\Bean\SalonBean object, that will be persisted in database.
	 *
	 * @return coiffuresenegal\Dao\Bean\SalonBean
	 */
	public function getNewSalon() {
		return $this->create();
	}

	/**
	 * Persist the coiffuresenegal\Dao\Bean\SalonBean instance
	 * (old function to keep compatibility with TDBM < 2.3)
	 *
	 */
	public function saveSalon($obj) {
		$this->save($obj);
	}
	
	/**
	 * Get all Salon records. 
	 *
	 * @return array<coiffuresenegal\Dao\Bean\SalonBean>
	 */
	public function getSalonList() {
		return $this->getList();
	}
	
	/**
	 * Get coiffuresenegal\Dao\Bean\SalonBean specified by its ID (its primary key)
	 * If the primary key does not exist, an exception is thrown.
	 *
	 * @param string $id
	 * @param boolean $lazyLoading If set to true, the object will not be loaded right away. Instead, it will be loaded when you first try to access a method of the object.
	 * @return coiffuresenegal\Dao\Bean\SalonBean
	 * @throws TDBMException
	 */
	public function getSalonById($id, $lazyLoading = false) {
		return $this->getById($id, $lazyLoading);
	}
	
	/**
	 * Deletes the coiffuresenegal\Dao\Bean\SalonBean passed in parameter.
	 *
	 * @param coiffuresenegal\Dao\Bean\SalonBean $obj
	 */
	public function deleteSalon($obj) {
		$this->delete($obj);
	}
	
	/**
	 * Get a list of coiffuresenegal\Dao\Bean\SalonBean specified by its filters.
	 *
	 * @param mixed $filterBag The filter bag (see TDBMService::getObjects for complete description)
	 * @param mixed $orderbyBag The order bag (see TDBMService::getObjects for complete description)
	 * @param integer $from The offset
	 * @param integer $limit The maximum number of rows returned
	 * @return array<coiffuresenegal\Dao\Bean\SalonBean>
	 */
	protected function getSalonListByFilter($filterBag=null, $orderbyBag=null, $from=null, $limit=null) {
		return $this->getListByFilter($filterBag, $orderbyBag, $from, $limit);
	}

	/**
	 * Get a single coiffuresenegal\Dao\Bean\SalonBean specified by its filters.
	 *
	 * @param mixed $filterBag The filter bag (see TDBMService::getObjects for complete description)
	 * @return coiffuresenegal\Dao\Bean\SalonBean
	 */
	protected function getSalonByFilter($filterBag=null) {
		return $this->getByFilter($filterBag);
	}
	
}
?>