<?php
// src/Controller/BeeWar/Colony.php
namespace App\Controller\BeeWar;

class Colony{

    /**
     * @var int
     */
    public $colony_id, $colony_quad_zone;

    /**
     * @var string
     */
     public $colony_name;
    
     /**
     * @var Bee
     */
    public $bee_queen;
    
    /**
     * @var Bee[]
     */
    public $bee_workers, $bee_warriors;
    
    /**
     * @var array
     */
    public $bee_positions;

    public function __construct()
    {
        $this->bee_positions = array();
        return $this;
    }

    public function getColony_id()
    {
        return $this->colony_id;
    }

    public function setColony_id(int $colony_id)
    {
        $this->colony_id = $colony_id;

        return $this;
    }

    
    public function getColony_quad_zone()
    {
        return $this->colony_quad_zone;
    }


    public function setColony_quad_zone(int $colony_quad_zone)
    {
        $this->colony_quad_zone = $colony_quad_zone;

        return $this;
    }

    
    public function getColony_name()
    {
        return $this->colony_name;
    }

    
    public function setColony_name(string $colony_name)
    {
        $this->colony_name = $colony_name;

        return $this;
    }

    public function getBee_queen()
    {
        return $this->bee_queen;
    }

    public function setBee_queen(Bee $bee_queen)
    {
        $this->bee_queen = $bee_queen;

        return $this;
    }

   
    public function getBee_workers()
    {
        return $this->bee_workers;
    }

    
    public function setBee_workers(array $bee_workers)
    {
        $this->bee_workers = $bee_workers;

        return $this;
    }

   
    public function getBee_warriors()
    {
        return $this->bee_warriors;
    }

    
    public function setBee_warriors(array $bee_warriors)
    {
        $this->bee_warriors = $bee_warriors;

        return $this;
    }

  
    public function getBee_positions()
    {
        return $this->bee_positions;
    }

  
    public function setBee_positions(array $bee_positions)
    {
        $this->bee_positions = $bee_positions;

        return $this;
    }
}
