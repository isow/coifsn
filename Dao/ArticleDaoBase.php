<?php

/**
 * @author Ibrahima SOW
 */

namespace coiffuresenegal\Dao;

use Database\TDBM\TDBMService;

/**
 * The ArticleDaoBase class will maintain the persistance of coiffuresenegal\Dao\Bean\ArticleBean class into the article table.
 * 
 */
class ArticleDaoBase extends DaoCommon implements DAOInterface {

    public $tableName = "article";
    public $tablePrimaryKey = "id_article";
    public $tableColumns = array(
        'id_article',
        'id_modele',
        'id_salon',
        'titre_article',
        'image',
        'notice',
        'actif',
        'article_une',
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
	 * Return a new instance of coiffuresenegal\Dao\Bean\ArticleBean object, that will be persisted in database.
	 *
	 * @return coiffuresenegal\Dao\Bean\ArticleBean
	 */
	public function create() {
		return $this->tdbmService->getNewObject('article', true, 'coiffuresenegal\Dao\Bean\ArticleBean');
	}
	
	/**
	 * Persist the coiffuresenegal\Dao\Bean\ArticleBean instance
	 *
	 */
	public function save($obj) {
		$obj->save();
	}

	/**
	 * Get all Article records. 
	 *
	 * @return array<coiffuresenegal\Dao\Bean\ArticleBean>
	 */
	public function getList() {
		return $this->tdbmService->getObjects('article', null, null, null, null, 'coiffuresenegal\Dao\Bean\ArticleBean');
	}
	
	/**
	 * Get coiffuresenegal\Dao\Bean\ArticleBean specified by its ID (its primary key)
	 * If the primary key does not exist, an exception is thrown.
	 *
	 * @param string $id
	 * @param boolean $lazyLoading If set to true, the object will not be loaded right away. Instead, it will be loaded when you first try to access a method of the object.
	 * @return coiffuresenegal\Dao\Bean\ArticleBean
	 * @throws TDBMException
	 */
	public function getById($id, $lazyLoading = false) {
		return $this->tdbmService->getObject('article', $id, 'coiffuresenegal\Dao\Bean\ArticleBean', $lazyLoading);
	}
	
	/**
	 * Deletes the coiffuresenegal\Dao\Bean\ArticleBean passed in parameter.
	 *
	 * @param coiffuresenegal\Dao\Bean\ArticleBean $obj
	 */
	public function delete($obj) {
		$this->tdbmService->deleteObject($obj);
	}
	
	/**
	 * Get a list of coiffuresenegal\Dao\Bean\ArticleBean specified by its filters.
	 *
	 * @param mixed $filterBag The filter bag (see TDBMService::getObjects for complete description)
	 * @param mixed $orderbyBag The order bag (see TDBMService::getObjects for complete description)
	 * @param integer $from The offset
	 * @param integer $limit The maximum number of rows returned
	 * @return array<coiffuresenegal\Dao\Bean\ArticleBean>
	 */
	protected function getListByFilter($filterBag=null, $orderbyBag=null, $from=null, $limit=null) {
		return $this->tdbmService->getObjects('article', $filterBag, $orderbyBag, $from, $limit, 'coiffuresenegal\Dao\Bean\ArticleBean');
	}

	/**
	 * Get a single coiffuresenegal\Dao\Bean\ArticleBean specified by its filters.
	 *
	 * @param mixed $filterBag The filter bag (see TDBMService::getObjects for complete description)
	 * @return coiffuresenegal\Dao\Bean\ArticleBean
	 */
	protected function getByFilter($filterBag=null) {
		return $this->tdbmService->getObject('article', $filterBag, 'coiffuresenegal\Dao\Bean\ArticleBean');
	}
	

	/**
	 * Return a new instance of coiffuresenegal\Dao\Bean\ArticleBean object, that will be persisted in database.
	 *
	 * @return coiffuresenegal\Dao\Bean\ArticleBean
	 */
	public function getNewArticle() {
		return $this->create();
	}

	/**
	 * Persist the coiffuresenegal\Dao\Bean\ArticleBean instance
	 * (old function to keep compatibility with TDBM < 2.3)
	 *
	 */
	public function saveArticle($obj) {
		$this->save($obj);
	}
	
	/**
	 * Get all Article records. 
	 *
	 * @return array<coiffuresenegal\Dao\Bean\ArticleBean>
	 */
	public function getArticleList() {
		return $this->getList();
	}
	
	/**
	 * Get coiffuresenegal\Dao\Bean\ArticleBean specified by its ID (its primary key)
	 * If the primary key does not exist, an exception is thrown.
	 *
	 * @param string $id
	 * @param boolean $lazyLoading If set to true, the object will not be loaded right away. Instead, it will be loaded when you first try to access a method of the object.
	 * @return coiffuresenegal\Dao\Bean\ArticleBean
	 * @throws TDBMException
	 */
	public function getArticleById($id, $lazyLoading = false) {
		return $this->getById($id, $lazyLoading);
	}
	
	/**
	 * Deletes the coiffuresenegal\Dao\Bean\ArticleBean passed in parameter.
	 *
	 * @param coiffuresenegal\Dao\Bean\ArticleBean $obj
	 */
	public function deleteArticle($obj) {
		$this->delete($obj);
	}
	
	/**
	 * Get a list of coiffuresenegal\Dao\Bean\ArticleBean specified by its filters.
	 *
	 * @param mixed $filterBag The filter bag (see TDBMService::getObjects for complete description)
	 * @param mixed $orderbyBag The order bag (see TDBMService::getObjects for complete description)
	 * @param integer $from The offset
	 * @param integer $limit The maximum number of rows returned
	 * @return array<coiffuresenegal\Dao\Bean\ArticleBean>
	 */
	protected function getArticleListByFilter($filterBag=null, $orderbyBag=null, $from=null, $limit=null) {
		return $this->getListByFilter($filterBag, $orderbyBag, $from, $limit);
	}

	/**
	 * Get a single coiffuresenegal\Dao\Bean\ArticleBean specified by its filters.
	 *
	 * @param mixed $filterBag The filter bag (see TDBMService::getObjects for complete description)
	 * @return coiffuresenegal\Dao\Bean\ArticleBean
	 */
	protected function getArticleByFilter($filterBag=null) {
		return $this->getByFilter($filterBag);
	}
	
}
?>