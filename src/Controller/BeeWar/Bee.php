<?php
// src/Controller/BeeWar/Bee.php
namespace App\Controller\BeeWar;

class Bee{

    /**
     * @var int
     */
	public $bee_id, $bee_type, $bee_colony, $bee_x_position, $bee_y_position, $bee_health, $bee_damage;
	
	public function __construct(){
		return $this;
	}
    
	public function getBee_id()
	{
		return $this->bee_id;
	}

	public function setBee_id(int $bee_id)
	{
		$this->bee_id = $bee_id;

		return $this;
	}


	public function getBee_type()
	{
		return $this->bee_type;
	}


	public function setBee_type(int $bee_type)
	{
		$this->bee_type = $bee_type;

		return $this;
	}


	public function getBee_colony()
	{
		return $this->bee_colony;
	}


	public function setBee_colony(int $bee_colony)
	{
		$this->bee_colony = $bee_colony;

		return $this;
	}

	public function getBee_x_position()
	{
		return $this->bee_x_position;
	}

	public function setBee_x_position(int $bee_x_position)
	{
		$this->bee_x_position = $bee_x_position;

		return $this;
	}

	public function getBee_y_position()
	{
		return $this->bee_y_position;
	}

	public function setBee_y_position(int $bee_y_position)
	{
		$this->bee_y_position = $bee_y_position;

		return $this;
	}

	public function getBee_health()
	{
		return $this->bee_health;
	}

	public function setBee_health(int $bee_health)
	{
		$this->bee_health = $bee_health;

		return $this;
	}

	public function getBee_damage()
	{
		return $this->bee_damage;
	}

	public function setBee_damage(int $bee_damage)
	{
		$this->bee_damage = $bee_damage;

		return $this;
	}
}