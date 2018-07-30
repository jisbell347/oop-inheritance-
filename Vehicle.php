<?php
/*
 * Parent class of Vehicle
 */
class Vehicle {
	protected $licensePlateNo;

	public function __construct(string $newLicensePlateNo) {
		$this->setLicensePlateNo($newLicensePlateNo);
	}

	public function getLicensePlateNo() : string {
		return($this->licensePlateNo);
	}

	public function setLicensePlateNo(string $newLicensePlateNo) : void {
		$this->licensePlateNo = $newLicensePlateNo;
	}
}
/*
 * Child class that extends the parent class: Vehicle
 */
class Mazda extends Vehicle {
	protected $model;
/*
 * uses the constructor from the parent class to obtain the $licensePlateNo state variable
 */
	public function __construct(string $newLicensePlateNo, string $newModel) {
		parent::__construct($newLicensePlateNo);
		$this->setModel($newModel);
	}

	public function getModel() : string {
		return($this->model);
	}

	public function getNumberOfZooms() : int {
		return 2;
	}

	public function setModel(string $newModel) : void {
		$this->model = $newModel;
	}
}