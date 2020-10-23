<?php
// src/Controller/BeeWar/War_Zone.php
namespace App\Controller\BeeWar;

class War_Zone{

    /**
     * @var int|null $war_quads              Should contain a description
     */
    public $war_quads, $war_quad_x_size, $war_quad_y_size, $war_x_size, $war_y_size;

	/**
     * @var Colony[]|null $war_bees_positions   Should contain a description
     */
	public $war_colonies;

	/**
     * @var array|null $war_bees_positions   Should contain a description
     */
	public $war_bees_positions;


	public function __construct()
	{
		$this->war_bees_positions =array();
		return $this;
    }
    
	public function quadToColonies()	// Set a quadrant to each colony
	{
		$quadrant = 0;												// First quadrant is 0
		foreach ($this->war_colonies as $colony_id => $colony) {	// Loop through all colonies
			$colony->colony_quad_zone = $quadrant++;				// Set a $quadrant++ to colony
		}
	}

	public function beesToPositions()	// Assing a spot to each Bee in War_Zone
	{
		$total_colonies = count($this->war_colonies);		// Count # total of colonies
		$this->war_quad_x_size = $quadrants_x_size = floor(($this->war_x_size)/$total_colonies); // Estimate the quadrant's x size
		$this->war_quad_y_size = $quadrants_y_size = $this->war_y_size; // Set the quadrant's y size from War_Zone property.
		
		$quadrants_positions = array();									// Array to push all the possible spots according to the quadrant's size		
		$x_posn = 0;
		for ($i=0; $i < $total_colonies; $i++) {						// From 0 to total of colonies
			$quadrants_positions[$i] = array();							// Init array of the current colony
			for ($x=0; $x < $quadrants_x_size; $x++) { 					// Loop through all the x axis of each colony
				for ($y=0; $y< $quadrants_y_size; $y++) { 				// Loop through all the y axis
					array_push($quadrants_positions[$i], [$x_posn, $y]);// Push possible spot
				}
				$x_posn++;												// counter var to go through all the x axis of the War_Zone
			}	
		}

		foreach ($this->war_colonies as $colony_id => $colony) {						// Loop through all the colonies
			$middleIndex = floor((count($quadrants_positions[$colony_id-1]) - 1) / 2);	// Get the middle index's position
			$middlePosn = $quadrants_positions[$colony_id-1][$middleIndex];				// Get coordinates

			$colony->bee_queen->bee_x_position = $middlePosn[0];						// Assing the most middle positions to the Queen
			$colony->bee_queen->bee_y_position = $middlePosn[1];						
			array_push($colony->bee_positions, $middlePosn);							// Push spot used to all positions array
			array_push($this->war_bees_positions, $colony->bee_queen);					// Push Bee to list of Bees 
			
			foreach ($colony->bee_workers as $bee_id => $bee) {									// Loop through all the worker bees
				$colony_posns = array_map("serialize", $colony->bee_positions);					// Map current busy positions
				$free_quad_posns = array_map("serialize", $quadrants_positions[$colony_id-1]);	// Map free spots

				$free_posn = array_rand(array_map("unserialize", 								// Get only the free spots
										array_diff($free_quad_posns,							// and return a random spot
												   $colony_posns)));
				$free_posn_x_y = $quadrants_positions[$colony_id-1][$free_posn];	// Get coordinates of the free spot
				$bee->bee_x_position = $free_posn_x_y[0];							// Set x coordinate to worker Bee
				$bee->bee_y_position = $free_posn_x_y[1];							// Set y coordinate to worker Bee

				array_push($colony->bee_positions, $free_posn_x_y);					// Push the coordinates to the War's positions array
				array_push($this->war_bees_positions, $bee);						// Push bee to list of bees
			}

			foreach ($colony->bee_warriors as $bee_id => $bee) {								// Loop through all the warrior bees
				$colony_posns = array_map("serialize", $colony->bee_positions);					// Map current busy positions
				$free_quad_posns = array_map("serialize", $quadrants_positions[$colony_id-1]);	// Map free spots
			
				$free_posn = array_rand(array_map("unserialize", 								// Get only the free spots
										array_diff($free_quad_posns,							// and return a random spot
												   $colony_posns)));
				$free_posn_x_y = $quadrants_positions[$colony_id-1][$free_posn];	// Get coordinates of the free spot
				$bee->bee_x_position = $free_posn_x_y[0];							// Set x coordinate to warrior Bee
				$bee->bee_y_position = $free_posn_x_y[1];							// Set y coordinate to warrior Bee

				array_push($colony->bee_positions, $free_posn_x_y);					// Push the coordinates to the War's positions array
				array_push($this->war_bees_positions, $bee);						// Push bee to list of bees
			}
		}	
	}

    public function getWar_quads()
    {
        return $this->war_quads;
    }

   
    public function setWar_quads(int $war_quads)
    {
        $this->war_quads = $war_quads;

        return $this;
    }

    public function getWar_quad_x_size()
    {
        return $this->war_quad_x_size;
    }

   
    public function setWar_quad_x_size(int $war_quad_x_size)
    {
        $this->war_quad_x_size = $war_quad_x_size;

        return $this;
    }

    
    public function getWar_quad_y_size()
    {
        return $this->war_quad_y_size;
    }

   
    public function setWar_quad_y_size(int $war_quad_y_size)
    {
        $this->war_quad_y_size = $war_quad_y_size;

        return $this;
    }


    public function getWar_x_size()
    {
        return $this->war_x_size;
    }

 
    public function setWar_x_size(int $war_x_size)
    {
        $this->war_x_size = $war_x_size;

        return $this;
    }

  
    public function getWar_y_size()
    {
        return $this->war_y_size;
    }

  
    public function setWar_y_size(int $war_y_size)
    {
        $this->war_y_size = $war_y_size;

        return $this;
    }


	public function getWar_colonies()
	{
		return $this->war_colonies;
	}


	public function setWar_colonies(array $war_colonies)
	{
		$this->war_colonies = $war_colonies;

		return $this;
	}

	
	public function getWar_bees_positions()
	{
		return $this->war_bees_positions;
	}

	
	public function setWar_bees_positions(array $war_bees_positions)
	{
		$this->war_bees_positions = $war_bees_positions;

		return $this;
	}
}