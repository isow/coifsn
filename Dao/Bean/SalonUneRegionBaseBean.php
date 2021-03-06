<?php
namespace coiffuresenegal\Dao\Bean;

use Database\TDBM\TDBMObject;


/*
 * This file has been automatically generated by TDBM.
 * DO NOT edit this file, as it might be overwritten.
 * If you need to perform changes, edit the SalonUneRegionBean class instead!
 */

/**
 * The SalonUneRegionBaseBean class maps the 'salon_une_region' table in database.
 * @dbTable salon_une_region
 */
class SalonUneRegionBaseBean extends TDBMObject
{
	/**
	 * The getter for the "ID_salon_une_region" column.
	 *
	 * @dbType int
	 * @dbColumn ID_salon_une_region
	 * @return string
	 */
	public function getIDSalonUneRegion(){
		return $this->__get('ID_salon_une_region');
	}
	
	/**
	 * The setter for the "ID_salon_une_region" column.
	 *
	 * @dbColumn ID_salon_une_region
	 * @param string $ID_salon_une_region
	 */
	public function setIDSalonUneRegion($ID_salon_une_region) {
		$this->__set('ID_salon_une_region', $ID_salon_une_region);
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
	 * The getter for the "id_region" column.
	 *
	 * @dbType int
	 * @dbColumn id_region
	 * @return string
	 */
	public function getIDRegion(){
		return $this->__get('id_region');
	}
	
	/**
	 * The setter for the "id_region" column.
	 *
	 * @dbColumn id_region
	 * @param string $id_region
	 */
	public function setIDRegion($id_region) {
		$this->__set('id_region', $id_region);
	}
	
	/**
	 * The getter for the "position" column.
	 *
	 * @dbType int
	 * @dbColumn position
	 * @return string
	 */
	public function getPosition(){
		return $this->__get('position');
	}
	
	/**
	 * The setter for the "position" column.
	 *
	 * @dbColumn position
	 * @param string $position
	 */
	public function setPosition($position) {
		$this->__set('position', $position);
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