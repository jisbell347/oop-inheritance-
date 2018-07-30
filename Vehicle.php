<?php

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

class Mazda extends Vehicle {
	protected $model;

	public function __construct(string $newLicensePlateNo, string $newModel) {
		parent::__construct($newLicensePlateNo);
		$this->setModel($newModel);
	}
}