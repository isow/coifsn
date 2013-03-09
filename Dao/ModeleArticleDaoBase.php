<?php

/**
 * @author Ibrahima SOW
 */

namespace coiffuresenegal\Dao;

use Database\TDBM\TDBMService;

/**
 * The ModeleArticleDaoBase class will maintain the persistance of coiffuresenegal\Dao\Bean\ModeleArticleBean class into the modele_article table.
 * 
 */
class ModeleArticleDaoBase extends DaoCommon implements DAOInterface {

    public $tableName = "modele_article";
    public $tablePrimaryKey = "ID_modele";
    public $tableColumns = array(
        'ID_modele',
        'nom_modele',
        'image',
        'actif',
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
	 * Return a new instance of coiffuresenegal\Dao\Bean\ModeleArticleBean object, that will be persisted in database.
	 *
	 * @return coiffuresenegal\Dao\Bean\ModeleArticleBean
	 */
	public function create() {
		return $this->tdbmService->getNewObject('modele_article', true, 'coiffuresenegal\Dao\Bean\ModeleArticleBean');
	}
	
	/**
	 * Persist the coiffuresenegal\Dao\Bean\ModeleArticleBean instance
	 *
	 */
	public function save($obj) {
		$obj->save();
	}

	/**
	 * Get all ModeleArticle records. 
	 *
	 * @return array<coiffuresenegal\Dao\Bean\ModeleArticleBean>
	 */
	public function getList() {
		return $this->tdbmService->getObjects('modele_article', null, null, null, null, 'coiffuresenegal\Dao\Bean\ModeleArticleBean');
	}
	
	/**
	 * Get coiffuresenegal\Dao\Bean\ModeleArticleBean specified by its ID (its primary key)
	 * If the primary key does not exist, an exception is thrown.
	 *
	 * @param string $id
	 * @param boolean $lazyLoading If set to true, the object will not be loaded right away. Instead, it will be loaded when you first try to access a method of the object.
	 * @return coiffuresenegal\Dao\Bean\ModeleArticleBean
	 * @throws TDBMException
	 */
	public function getById($id, $lazyLoading = false) {
		return $this->tdbmService->getObject('modele_article', $id, 'coiffuresenegal\Dao\Bean\ModeleArticleBean', $lazyLoading);
	}
	
	/**
	 * Deletes the coiffuresenegal\Dao\Bean\ModeleArticleBean passed in parameter.
	 *
	 * @param coiffuresenegal\Dao\Bean\ModeleArticleBean $obj
	 */
	public function delete($obj) {
		$this->tdbmService->deleteObject($obj);
	}
	
	/**
	 * Get a list of coiffuresenegal\Dao\Bean\ModeleArticleBean specified by its filters.
	 *
	 * @param mixed $filterBag The filter bag (see TDBMService::getObjects for complete description)
	 * @param mixed $orderbyBag The order bag (see TDBMService::getObjects for complete description)
	 * @param integer $from The offset
	 * @param integer $limit The maximum number of rows returned
	 * @return array<coiffuresenegal\Dao\Bean\ModeleArticleBean>
	 */
	protected function getListByFilter($filterBag=null, $orderbyBag=null, $from=null, $limit=null) {
		return $this->tdbmService->getObjects('modele_article', $filterBag, $orderbyBag, $from, $limit, 'coiffuresenegal\Dao\Bean\ModeleArticleBean');
	}

	/**
	 * Get a single coiffuresenegal\Dao\Bean\ModeleArticleBean specified by its filters.
	 *
	 * @param mixed $filterBag The filter bag (see TDBMService::getObjects for complete description)
	 * @return coiffuresenegal\Dao\Bean\ModeleArticleBean
	 */
	protected function getByFilter($filterBag=null) {
		return $this->tdbmService->getObject('modele_article', $filterBag, 'coiffuresenegal\Dao\Bean\ModeleArticleBean');
	}
	

	/**
	 * Return a new instance of coiffuresenegal\Dao\Bean\ModeleArticleBean object, that will be persisted in database.
	 *
	 * @return coiffuresenegal\Dao\Bean\ModeleArticleBean
	 */
	public function getNewModeleArticle() {
		return $this->create();
	}

	/**
	 * Persist the coiffuresenegal\Dao\Bean\ModeleArticleBean instance
	 * (old function to keep compatibility with TDBM < 2.3)
	 *
	 */
	public function saveModeleArticle($obj) {
		$this->save($obj);
	}
	
	/**
	 * Get all ModeleArticle records. 
	 *
	 * @return array<coiffuresenegal\Dao\Bean\ModeleArticleBean>
	 */
	public function getModeleArticleList() {
		return $this->getList();
	}
	
	/**
	 * Get coiffuresenegal\Dao\Bean\ModeleArticleBean specified by its ID (its primary key)
	 * If the primary key does not exist, an exception is thrown.
	 *
	 * @param string $id
	 * @param boolean $lazyLoading If set to true, the object will not be loaded right away. Instead, it will be loaded when you first try to access a method of the object.
	 * @return coiffuresenegal\Dao\Bean\ModeleArticleBean
	 * @throws TDBMException
	 */
	public function getModeleArticleById($id, $lazyLoading = false) {
		return $this->getById($id, $lazyLoading);
	}
	
	/**
	 * Deletes the coiffuresenegal\Dao\Bean\ModeleArticleBean passed in parameter.
	 *
	 * @param coiffuresenegal\Dao\Bean\ModeleArticleBean $obj
	 */
	public function deleteModeleArticle($obj) {
		$this->delete($obj);
	}
	
	/**
	 * Get a list of coiffuresenegal\Dao\Bean\ModeleArticleBean specified by its filters.
	 *
	 * @param mixed $filterBag The filter bag (see TDBMService::getObjects for complete description)
	 * @param mixed $orderbyBag The order bag (see TDBMService::getObjects for complete description)
	 * @param integer $from The offset
	 * @param integer $limit The maximum number of rows returned
	 * @return array<coiffuresenegal\Dao\Bean\ModeleArticleBean>
	 */
	protected function getModeleArticleListByFilter($filterBag=null, $orderbyBag=null, $from=null, $limit=null) {
		return $this->getListByFilter($filterBag, $orderbyBag, $from, $limit);
	}

	/**
	 * Get a single coiffuresenegal\Dao\Bean\ModeleArticleBean specified by its filters.
	 *
	 * @param mixed $filterBag The filter bag (see TDBMService::getObjects for complete description)
	 * @return coiffuresenegal\Dao\Bean\ModeleArticleBean
	 */
	protected function getModeleArticleByFilter($filterBag=null) {
		return $this->getByFilter($filterBag);
	}
	
}
?>