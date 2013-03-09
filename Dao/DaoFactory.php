<?php
/*
 * This file has been automatically generated by TDBM.
 * DO NOT edit this file, as it might be overwritten.
 */
namespace coiffuresenegal\Dao;
		
/**
 * The DaoFactory provides an easy access to all DAOs generated by TDBM.
 *
 * @Component
 */
class DaoFactory 
{
	/**
	 * @var ArticleDao
	 */
	private $articleDao;

	/**
	 * Returns an instance of the ArticleDao class.
	 * 
	 * @return ArticleDao
	 */
	public function getArticleDao() {
		return $this->articleDao;
	}
	
	/**
	 * Sets the instance of the ArticleDao class that will be returned by the factory getter.
	 * 
	 * @Property
	 * @Compulsory
	 * @param ArticleDao $articleDao
	 */
	public function setArticleDao(ArticleDao $articleDao) {
		$this->articleDao = $articleDao;
	}
	
	/**
	 * @var DiaporamaDao
	 */
	private $diaporamaDao;

	/**
	 * Returns an instance of the DiaporamaDao class.
	 * 
	 * @return DiaporamaDao
	 */
	public function getDiaporamaDao() {
		return $this->diaporamaDao;
	}
	
	/**
	 * Sets the instance of the DiaporamaDao class that will be returned by the factory getter.
	 * 
	 * @Property
	 * @Compulsory
	 * @param DiaporamaDao $diaporamaDao
	 */
	public function setDiaporamaDao(DiaporamaDao $diaporamaDao) {
		$this->diaporamaDao = $diaporamaDao;
	}
	
	/**
	 * @var ModeleArticleDao
	 */
	private $modeleArticleDao;

	/**
	 * Returns an instance of the ModeleArticleDao class.
	 * 
	 * @return ModeleArticleDao
	 */
	public function getModeleArticleDao() {
		return $this->modeleArticleDao;
	}
	
	/**
	 * Sets the instance of the ModeleArticleDao class that will be returned by the factory getter.
	 * 
	 * @Property
	 * @Compulsory
	 * @param ModeleArticleDao $modeleArticleDao
	 */
	public function setModeleArticleDao(ModeleArticleDao $modeleArticleDao) {
		$this->modeleArticleDao = $modeleArticleDao;
	}
	
	/**
	 * @var PhotoDao
	 */
	private $photoDao;

	/**
	 * Returns an instance of the PhotoDao class.
	 * 
	 * @return PhotoDao
	 */
	public function getPhotoDao() {
		return $this->photoDao;
	}
	
	/**
	 * Sets the instance of the PhotoDao class that will be returned by the factory getter.
	 * 
	 * @Property
	 * @Compulsory
	 * @param PhotoDao $photoDao
	 */
	public function setPhotoDao(PhotoDao $photoDao) {
		$this->photoDao = $photoDao;
	}
	
	/**
	 * @var RegionDao
	 */
	private $regionDao;

	/**
	 * Returns an instance of the RegionDao class.
	 * 
	 * @return RegionDao
	 */
	public function getRegionDao() {
		return $this->regionDao;
	}
	
	/**
	 * Sets the instance of the RegionDao class that will be returned by the factory getter.
	 * 
	 * @Property
	 * @Compulsory
	 * @param RegionDao $regionDao
	 */
	public function setRegionDao(RegionDao $regionDao) {
		$this->regionDao = $regionDao;
	}
	
	/**
	 * @var SalonDao
	 */
	private $salonDao;

	/**
	 * Returns an instance of the SalonDao class.
	 * 
	 * @return SalonDao
	 */
	public function getSalonDao() {
		return $this->salonDao;
	}
	
	/**
	 * Sets the instance of the SalonDao class that will be returned by the factory getter.
	 * 
	 * @Property
	 * @Compulsory
	 * @param SalonDao $salonDao
	 */
	public function setSalonDao(SalonDao $salonDao) {
		$this->salonDao = $salonDao;
	}
	
	/**
	 * @var SalonUneRegionDao
	 */
	private $salonUneRegionDao;

	/**
	 * Returns an instance of the SalonUneRegionDao class.
	 * 
	 * @return SalonUneRegionDao
	 */
	public function getSalonUneRegionDao() {
		return $this->salonUneRegionDao;
	}
	
	/**
	 * Sets the instance of the SalonUneRegionDao class that will be returned by the factory getter.
	 * 
	 * @Property
	 * @Compulsory
	 * @param SalonUneRegionDao $salonUneRegionDao
	 */
	public function setSalonUneRegionDao(SalonUneRegionDao $salonUneRegionDao) {
		$this->salonUneRegionDao = $salonUneRegionDao;
	}
	
	/**
	 * @var SalonUneVilleDao
	 */
	private $salonUneVilleDao;

	/**
	 * Returns an instance of the SalonUneVilleDao class.
	 * 
	 * @return SalonUneVilleDao
	 */
	public function getSalonUneVilleDao() {
		return $this->salonUneVilleDao;
	}
	
	/**
	 * Sets the instance of the SalonUneVilleDao class that will be returned by the factory getter.
	 * 
	 * @Property
	 * @Compulsory
	 * @param SalonUneVilleDao $salonUneVilleDao
	 */
	public function setSalonUneVilleDao(SalonUneVilleDao $salonUneVilleDao) {
		$this->salonUneVilleDao = $salonUneVilleDao;
	}
	
	/**
	 * @var UserAdminDao
	 */
	private $userAdminDao;

	/**
	 * Returns an instance of the UserAdminDao class.
	 * 
	 * @return UserAdminDao
	 */
	public function getUserAdminDao() {
		return $this->userAdminDao;
	}
	
	/**
	 * Sets the instance of the UserAdminDao class that will be returned by the factory getter.
	 * 
	 * @Property
	 * @Compulsory
	 * @param UserAdminDao $userAdminDao
	 */
	public function setUserAdminDao(UserAdminDao $userAdminDao) {
		$this->userAdminDao = $userAdminDao;
	}
	
	/**
	 * @var VilleDao
	 */
	private $villeDao;

	/**
	 * Returns an instance of the VilleDao class.
	 * 
	 * @return VilleDao
	 */
	public function getVilleDao() {
		return $this->villeDao;
	}
	
	/**
	 * Sets the instance of the VilleDao class that will be returned by the factory getter.
	 * 
	 * @Property
	 * @Compulsory
	 * @param VilleDao $villeDao
	 */
	public function setVilleDao(VilleDao $villeDao) {
		$this->villeDao = $villeDao;
	}
	

}
?>