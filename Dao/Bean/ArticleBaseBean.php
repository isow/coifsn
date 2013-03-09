<?php
namespace coiffuresenegal\Dao\Bean;

use Database\TDBM\TDBMObject;

/*
 * This file has been automatically generated by TDBM.
 * DO NOT edit this file, as it might be overwritten.
 * If you need to perform changes, edit the ArticleBean class instead!
 */

/**
 * The ArticleBaseBean class maps the 'article' table in database.
 * @dbTable article
 */
class ArticleBaseBean extends TDBMObject
{
	
        /**
	 * The getter for the "ID_article" column.
	 *
	 * @dbType int
	 * @dbColumn ID_article
	 * @return string
	 */
	public function getIDArticle(){
		return $this->__get('ID_article');
	}
	
	/**
	 * The setter for the "ID_article" column.
	 *
	 * @dbColumn ID_article
	 * @param string $ID_article
	 */
	public function setIDArticle($ID_article) {
		$this->__set('ID_article', $ID_article);
	}
	
	/**
	 * The getter for the "ID_modele" column.
	 *
	 * @dbType int
	 * @dbColumn ID_modele
	 * @return string
	 */
	public function getIDModele(){
		return $this->__get('ID_modele');
	}
	
	/**
	 * The setter for the "ID_modele" column.
	 *
	 * @dbColumn ID_modele
	 * @param string $ID_modele
	 */
	public function setIDModele($ID_modele) {
		$this->__set('ID_modele', $ID_modele);
	}
	
	/**
	 * The getter for the "ID_salon" column.
	 *
	 * @dbType int
	 * @dbColumn ID_salon
	 * @return string
	 */
	public function getIDSalon(){
		return $this->__get('ID_salon');
	}
	
	/**
	 * The setter for the "ID_salon" column.
	 *
	 * @dbColumn ID_salon
	 * @param string $ID_salon
	 */
	public function setIDSalon($ID_salon) {
		$this->__set('ID_salon', $ID_salon);
	}
	
	/**
	 * The getter for the "titre_article" column.
	 *
	 * @dbType string
	 * @dbColumn titre_article
	 * @return string
	 */
	public function getTitreArticle(){
		return $this->__get('titre_article');
	}
	
	/**
	 * The setter for the "titre_article" column.
	 *
	 * @dbColumn titre_article
	 * @param string $titre_article
	 */
	public function setTitreArticle($titre_article) {
		$this->__set('titre_article', $titre_article);
	}
	
	/**
	 * The getter for the "image" column.
	 *
	 * @dbType string
	 * @dbColumn image
	 * @return string
	 */
	public function getImage(){
		return $this->__get('image');
	}
	
	/**
	 * The setter for the "image" column.
	 *
	 * @dbColumn image
	 * @param string $image
	 */
	public function setImage($image) {
		$this->__set('image', $image);
	}
	
	/**
	 * The getter for the "notice" column.
	 *
	 * @dbType string
	 * @dbColumn notice
	 * @return string
	 */
	public function getNotice(){
		return $this->__get('notice');
	}
	
	/**
	 * The setter for the "notice" column.
	 *
	 * @dbColumn notice
	 * @param string $notice
	 */
	public function setNotice($notice) {
		$this->__set('notice', $notice);
	}
	
	/**
	 * The getter for the "actif" column.
	 *
	 * @dbType int
	 * @dbColumn actif
	 * @return string
	 */
	public function getActif(){
		return $this->__get('actif');
	}
	
	/**
	 * The setter for the "actif" column.
	 *
	 * @dbColumn actif
	 * @param string $actif
	 */
	public function setActif($actif) {
		$this->__set('actif', $actif);
	}
	
	/**
	 * The getter for the "article_une" column.
	 *
	 * @dbType int
	 * @dbColumn article_une
	 * @return string
	 */
	public function getArticleUne(){
		return $this->__get('article_une');
	}
	
	/**
	 * The setter for the "article_une" column.
	 *
	 * @dbColumn article_une
	 * @param string $article_une
	 */
	public function setArticleUne($article_une) {
		$this->__set('article_une', $article_une);
	}
	
	/**
	 * The getter for the "created_at" column.
	 * It is returned as a PHP timestamp.
	 *
	 * @dbType datetime
	 * @dbColumn created_at
	 * @return timestamp
	 */
	public function getCreatedAt(){
		$date = $this->__get('created_at');
		if($date === null)
			return null;
		else
			return strtotime($date);
	}
	
	/**
	 * The setter for the "created_at" column.
	 * It must be provided as a PHP timestamp.
	 *
	 * @dbColumn created_at
	 * @param timestamp $created_at
	 */
	public function setCreatedAt($created_at) {
		if($created_at === null)
			$this->__set('created_at', null);
		else
			$this->__set('created_at', date("Y-m-d H:i:s", $created_at));
	}
	
	/**
	 * The getter for the "updated_at" column.
	 * It is returned as a PHP timestamp.
	 *
	 * @dbType timestamp
	 * @dbColumn updated_at
	 * @return timestamp
	 */
	public function getUpdatedAt(){
		$date = $this->__get('updated_at');
		if($date === null)
			return null;
		else
			return strtotime($date);
	}
	
	/**
	 * The setter for the "updated_at" column.
	 * It must be provided as a PHP timestamp.
	 *
	 * @dbColumn updated_at
	 * @param timestamp $updated_at
	 */
	public function setUpdatedAt($updated_at) {
		if($updated_at === null)
			$this->__set('updated_at', null);
		else
			$this->__set('updated_at', date("Y-m-d H:i:s", $updated_at));
	}
	
}
?>