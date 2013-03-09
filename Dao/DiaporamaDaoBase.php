<?php

/**
 * @author Ibrahima SOW
 */

namespace coiffuresenegal\Dao;

use Database\TDBM\TDBMService;

//use DAOInterface;

/**
 * The DiaporamaDaoBase class will maintain the persistance of coiffuresenegal\Dao\Bean\DiaporamaBean class into the diaporama table.
 * 
 */
class DiaporamaDaoBase extends DaoCommon implements DAOInterface {

    public $tableName = "diaporama";
    public $tablePrimaryKey = "ID_diaporama";
    public $tableColumns = array(
        'ID_diaporama',
        'ID_article',
        'nom_diaporama',
        'notice', 'actif',
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
	 * Return a new instance of coiffuresenegal\Dao\Bean\DiaporamaBean object, that will be persisted in database.
	 *
	 * @return coiffuresenegal\Dao\Bean\DiaporamaBean
	 */
	public function create() {
		return $this->tdbmService->getNewObject('diaporama', true, 'coiffuresenegal\Dao\Bean\DiaporamaBean');
	}
	
	/**
	 * Persist the coiffuresenegal\Dao\Bean\DiaporamaBean instance
	 *
	 */
	public function save($obj) {
		$obj->save();
	}

	/**
	 * Get all Diaporama records. 
	 *
	 * @return array<coiffuresenegal\Dao\Bean\DiaporamaBean>
	 */
	public function getList() {
		return $this->tdbmService->getObjects('diaporama', null, null, null, null, 'coiffuresenegal\Dao\Bean\DiaporamaBean');
	}
	
	/**
	 * Get coiffuresenegal\Dao\Bean\DiaporamaBean specified by its ID (its primary key)
	 * If the primary key does not exist, an exception is thrown.
	 *
	 * @param string $id
	 * @param boolean $lazyLoading If set to true, the object will not be loaded right away. Instead, it will be loaded when you first try to access a method of the object.
	 * @return coiffuresenegal\Dao\Bean\DiaporamaBean
	 * @throws TDBMException
	 */
	public function getById($id, $lazyLoading = false) {
		return $this->tdbmService->getObject('diaporama', $id, 'coiffuresenegal\Dao\Bean\DiaporamaBean', $lazyLoading);
	}
	
	/**
	 * Deletes the coiffuresenegal\Dao\Bean\DiaporamaBean passed in parameter.
	 *
	 * @param coiffuresenegal\Dao\Bean\DiaporamaBean $obj
	 */
	public function delete($obj) {
		$this->tdbmService->deleteObject($obj);
	}
	
	/**
	 * Get a list of coiffuresenegal\Dao\Bean\DiaporamaBean specified by its filters.
	 *
	 * @param mixed $filterBag The filter bag (see TDBMService::getObjects for complete description)
	 * @param mixed $orderbyBag The order bag (see TDBMService::getObjects for complete description)
	 * @param integer $from The offset
	 * @param integer $limit The maximum number of rows returned
	 * @return array<coiffuresenegal\Dao\Bean\DiaporamaBean>
	 */
	protected function getListByFilter($filterBag=null, $orderbyBag=null, $from=null, $limit=null) {
		return $this->tdbmService->getObjects('diaporama', $filterBag, $orderbyBag, $from, $limit, 'coiffuresenegal\Dao\Bean\DiaporamaBean');
	}

	/**
	 * Get a single coiffuresenegal\Dao\Bean\DiaporamaBean specified by its filters.
	 *
	 * @param mixed $filterBag The filter bag (see TDBMService::getObjects for complete description)
	 * @return coiffuresenegal\Dao\Bean\DiaporamaBean
	 */
	protected function getByFilter($filterBag=null) {
		return $this->tdbmService->getObject('diaporama', $filterBag, 'coiffuresenegal\Dao\Bean\DiaporamaBean');
	}
	

	/**
	 * Return a new instance of coiffuresenegal\Dao\Bean\DiaporamaBean object, that will be persisted in database.
	 *
	 * @return coiffuresenegal\Dao\Bean\DiaporamaBean
	 */
	public function getNewDiaporama() {
		return $this->create();
	}

	/**
	 * Persist the coiffuresenegal\Dao\Bean\DiaporamaBean instance
	 * (old function to keep compatibility with TDBM < 2.3)
	 *
	 */
	public function saveDiaporama($obj) {
		$this->save($obj);
	}
	
	/**
	 * Get all Diaporama records. 
	 *
	 * @return array<coiffuresenegal\Dao\Bean\DiaporamaBean>
	 */
	public function getDiaporamaList() {
		return $this->getList();
	}
	
	/**
	 * Get coiffuresenegal\Dao\Bean\DiaporamaBean specified by its ID (its primary key)
	 * If the primary key does not exist, an exception is thrown.
	 *
	 * @param string $id
	 * @param boolean $lazyLoading If set to true, the object will not be loaded right away. Instead, it will be loaded when you first try to access a method of the object.
	 * @return coiffuresenegal\Dao\Bean\DiaporamaBean
	 * @throws TDBMException
	 */
	public function getDiaporamaById($id, $lazyLoading = false) {
		return $this->getById($id, $lazyLoading);
	}
	
	/**
	 * Deletes the coiffuresenegal\Dao\Bean\DiaporamaBean passed in parameter.
	 *
	 * @param coiffuresenegal\Dao\Bean\DiaporamaBean $obj
	 */
	public function deleteDiaporama($obj) {
		$this->delete($obj);
	}
	
	/**
	 * Get a list of coiffuresenegal\Dao\Bean\DiaporamaBean specified by its filters.
	 *
	 * @param mixed $filterBag The filter bag (see TDBMService::getObjects for complete description)
	 * @param mixed $orderbyBag The order bag (see TDBMService::getObjects for complete description)
	 * @param integer $from The offset
	 * @param integer $limit The maximum number of rows returned
	 * @return array<coiffuresenegal\Dao\Bean\DiaporamaBean>
	 */
	protected function getDiaporamaListByFilter($filterBag=null, $orderbyBag=null, $from=null, $limit=null) {
		return $this->getListByFilter($filterBag, $orderbyBag, $from, $limit);
	}

	/**
	 * Get a single coiffuresenegal\Dao\Bean\DiaporamaBean specified by its filters.
	 *
	 * @param mixed $filterBag The filter bag (see TDBMService::getObjects for complete description)
	 * @return coiffuresenegal\Dao\Bean\DiaporamaBean
	 */
	protected function getDiaporamaByFilter($filterBag=null) {
		return $this->getByFilter($filterBag);
	}
	
}
?>