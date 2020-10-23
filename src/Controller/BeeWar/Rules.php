<?php
// src/Controller/BeeWar/Rules.php
namespace App\Controller\BeeWar;

class Rules{

    /**
     * @var Bee
     */
    public $bee;

    /**
     * @var War_Zone
     */
    public $warZone;
    
    /**
     * @var int
     */
    public $war_x_size, $war_y_size;
	
	public function __construct(War_Zone $warZone){             // Init class with War_Zone object
        $this->warZone = $warZone;
        $this->war_x_size = $this->warZone->war_x_size;
        $this->war_y_size = $this->warZone->war_y_size;
		return $this;
    }
    
    public function beePossibleMovements(Bee $bee)              // Get all the possible movements of Bee $bee
    {
        $this->bee = $bee;                                      // Set to Rules the current Bee
        $x_coord = $bee->bee_x_position;                        // Get the bee's coordenates
        $y_coord = $bee->bee_y_position;
        $possibleMovements = array(
                                    [$x_coord - 1, $y_coord - 1],[$x_coord - 1, $y_coord],[$x_coord - 1, $y_coord + 1],
                                    [$x_coord, $y_coord - 1],[$x_coord, $y_coord + 1],
                                    [$x_coord + 1, $y_coord - 1],[$x_coord + 1, $y_coord],[$x_coord + 1, $y_coord + 1]
                                    );                          // Init all possible movements

        foreach ($possibleMovements as $key => $coordinates) {      // Iterate through all possible movements
            if( $coordinates[0] < 0                  ||             // If any x or y value is out of the War_Zone's bounds
                $coordinates[0] >= $this->war_x_size ||             //
                $coordinates[1] < 0                  ||             //
                $coordinates[1] >= $this->war_y_size){              //
                unset($possibleMovements[$key]);                    // Remove the coordinates 
            }
        }

        $bees_around_me = $this->anyBeeAroundMe($possibleMovements);    // Check if there is any bee around
        $bussy_posn = array_map("serialize", $bees_around_me);          // Map the bussy positions by any bee around
        $might_be_free = array_map("serialize", $possibleMovements);    // Map all the possible movements

        $free_posn = array_map("unserialize",                           // Differ bussy and free spots and map them
                                array_diff($might_be_free,
                                            $bussy_posn));
        
        return ['possibleMovements'=> $free_posn, 'beesAroundMe' => $bees_around_me];   // Return all free spots and bees around
    }

    public function anyBeeAroundMe(array $possibleMovements)        // Check if there is already any bee IN any possible movement  
    {
        $bees_around_me = array();                                  // Temp array with bees around
        foreach ($this->warZone->war_bees_positions as $bee) {      // Loop through all the Bees in War_Zone to compare coordinates
            if( in_array([$bee->bee_x_position,$bee->bee_y_position], $possibleMovements, true)){   // If any coordinates pair is in possible movements' array
                array_push($bees_around_me,[$bee->bee_x_position,$bee->bee_y_position]);            // Push the bee around
            }
        }
        return $bees_around_me;     // Return all bees around
    }

    public function findBeeByCoord(array $coordinates)      // Find a bee by coordinates
    {
        $x_coord = $coordinates[0];     // Set x_coord from param
        $y_coord = $coordinates[1];     // Set y_coord from param
        foreach ($this->warZone->war_bees_positions as $bee) {      // Loop through all the Bees in War_Zone to compare coordinates                  
            if($bee->bee_x_position == $x_coord && $bee->bee_y_position == $y_coord){   // If a pair match
            return $bee;                                                                // Return Bee
            }
        }
        return null;    // Otherwise return null *Which may mean that there is an error*
    }

    public function getBeeKeyByCoord(array $coordinates)    // Find the key posn of a bee from the Bees in War_Zone's object               
    {
        $x_coord = $coordinates[0];     // Set x_coord from param
        $y_coord = $coordinates[1];     // Set y_coord from param
        foreach ($this->warZone->war_bees_positions as $key => $bee) {  // Loop through all the Bees in War_Zone to compare coordinates      
            if($bee->bee_x_position == $x_coord && $bee->bee_y_position == $y_coord){   // If a pair match
            return $key;                                                                // Return position (Key)
            }
        }
        return null;   // Otherwise return null *Which may mean that there is an error*
    }

    public function attack(array $beesAround)   // Choose a bee from around and damage it
    {
        if(!empty($beesAround)){                                        // If there is any bee around
            $random_posn = array_rand($beesAround);                     // Choose one randomly
            $coordinates = $beesAround[$random_posn];                   // Get coordinates of the bee to attack
            $bee_around_me = $this->findBeeByCoord($coordinates);       // Find the Bee's object by the coordinates
            if($bee_around_me->bee_colony != $this->bee->bee_colony){   // If the Bee to attack is from a different colony                    
                $bee_around_me->setBee_health($bee_around_me->getBee_health()-$this->bee->getBee_damage()); // ATTACK!!!
                return $bee_around_me;  // Return the attacked bee's object
            }
        }
        return null; // Otherwise return null *Which means that it did not attack any bee around as there weren't or they were friends*
    }

    public function purgeBee(Bee $bee){             // Check if an attacked bee needs to be purged
        $current_health = $bee->getBee_health();    // Get current bee's health (usually after attack on BeeWar.php)
        return $current_health>0? false : true;     // Return if it needs to be purged or not
    }


    public function beeOnTheMove(array $possibleMovements){                     // Update the next bee's position
        if(!empty($possibleMovements)){                                         // If there are possible movements
            $random_posn = array_rand($possibleMovements);                      // Choose randomly a spot
            $this->bee->setBee_x_position($possibleMovements[$random_posn][0]); // Set the new x position
            $this->bee->setBee_y_position($possibleMovements[$random_posn][1]); // Set the new y position
            return $possibleMovements;                                          // Return all possible movements
        }
        return 1;   // The bee did not move
    }
    
}