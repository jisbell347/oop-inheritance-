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
 * trait that can be used by multiple classes
 */

trait InternalCombustionEngine {
	protected $requiresPushing;

	public function getRequiresPushing() :bool {
		return($this->requiresPushing);
	}

	public function setRequiresPushing(bool $newRequiresPushing) :void {
		$this->requiresPushing = $newRequiresPushing;
	}

	public function run() :void {
		if($this->requiresPushing === true) {
			echo "Hi Marlon" . PHP_EOL;
		} else {
			echo "Chugga Lugga" . PHP_EOL;
		}
	}
}
/*
 * Child class that extends the parent class: Vehicle
 */
class Mazda extends Vehicle {
	/*
	 * Uses the methods and state variable defined inside the InternalCombustionEngine Trait
	 */
	use InternalCombustionEngine;

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

