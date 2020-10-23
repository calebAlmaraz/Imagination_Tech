<?php
// src/Controller/BeeWar/BeeWar.php
namespace App\Controller\BeeWar;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\PropertyTypeExtractorInterface;
use Symfony\Component\PropertyInfo\Type;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class BeeWar extends AbstractController
{
    /**
     * @var War_Zone $warZone Should contain a description
     */
    public $warZone;

    /**#
     * #@Route("/", name="bee_war")
     #*/
    public function index()
    {
        
        /** 
         * Initialise Colony 1: Bumblebees
        */
        $firstColony = new Colony();                    // Init Colony object
        $firstColony->setColony_id(1);                  // Setting $colony_id
        $firstColony->setColony_name("Bumblebees");     // Setting $colony_name

        /** 
         * Initialise queen for Colony 1: Bumblebees
        */
        $queenBee = new Bee ();                             // Init Bee object
        $queenBee->setBee_id(0);                            // Setting $bee_id
        $queenBee->setBee_type(1);                          // Setting $bee_type {1=>QUEEN, 2=> WORKER, 3=> WARRIOR}
        $queenBee->setBee_colony($firstColony->colony_id);  // Setting $bee_colony
        $queenBee->setBee_health(50);                       // Setting $bee_health = {QUEEN=>50, WORKER=>5, WARRIOR=>10} 
        $queenBee->setBee_damage(1);                        // Setting $bee_damage
        $firstColony->setBee_queen($queenBee);              // Set Queen to colony
        
        /** 
         * Initialise bee workers for Colony 1: Bumblebees
        */
        $num_worker_bees = mt_rand(15, 20);                         // Get random # of worker bees
        $bee_workers = array();                                     // Temp bee workers array to set to Colony
        for ($bee=1; $bee <= $num_worker_bees; $bee++) {            // Loop from 0 to # of worker bees
            $workerBee = new Bee ();                                    // Init Bee object
            $workerBee->setBee_id($bee);                                // Setting $bee_id
            $workerBee->setBee_type(2);                                 // Setting $bee_type {1=>QUEEN, 2=> WORKER, 3=> WARRIOR}
            $workerBee->setBee_colony($firstColony->colony_id);         // Setting $bee_colony
            $workerBee->setBee_health(5);                               // Setting $bee_health = {QUEEN=>50, WORKER=>5, WARRIOR=>10}
            $workerBee->setBee_damage(mt_rand(2, 4));                   // Setting $bee_damage = random # between 2 and 4
            $bee_workers[$bee] = $workerBee;                            // Append object to array
        }                                                           // End loop
        $firstColony->setBee_workers($bee_workers);                 // Set worker bee's array to colony

        /** 
         * Initialise bee warriors for Colony 1: Bumblebees
        */
        $num_warrios_bees = mt_rand($num_worker_bees+10, $num_worker_bees+15);  // Get random # of warrior bees and keep counting index from workers
        $bee_warriors = array();                                                // Temp warrior bees array to set to Colony
        for ($bee=$bee; $bee <= $num_warrios_bees; $bee++) {                    // Loop from 0 to # of warrior bees
        $warriorBee = new Bee ();                                                   // Init Bee object
            $warriorBee->setBee_id($bee);                                           // Setting $bee_id
            $warriorBee->setBee_type(3);                                            // Setting $bee_type {1=>QUEEN, 2=> WORKER, 3=> WARRIOR}
            $warriorBee->setBee_colony($firstColony->colony_id);                    // Setting $bee_colony
            $warriorBee->setBee_health(10);                                         // Setting $bee_health = {QUEEN=>50, WORKER=>5, WARRIOR=>10}
            $warriorBee->setBee_damage(mt_rand(4, 7));                              // Setting $bee_damage = random # between 4 and 7
            $bee_warriors[$bee] = $warriorBee;                                      // Append object to array
        }                                                                       // End loop
        $firstColony->setBee_warriors($bee_warriors);                           // Set warrior bee's array to colony

        /** 
         * Initialise Colony 2: Leafcutters
        */
        $secondColony = new Colony();                   // Init Colony object
        $secondColony->setColony_id(2);                 // Setting $colony_id
        $secondColony->setColony_name("Leafcutters");   // Setting $colony_name

        /** 
         * Initialise queen for Colony 2: Leafcutters
        */
        $queenBee = new Bee ();                                 // Init Bee objec
        $queenBee->setBee_id(0);                                // Setting $bee_id
        $queenBee->setBee_type(1);                              // Setting $bee_type {1=>QUEEN, 2=> WORKER, 3=> WARRIOR}
        $queenBee->setBee_colony($secondColony->colony_id);     // Setting $bee_colony
        $queenBee->setBee_health(50);                           // Setting $bee_health = {QUEEN=>50, WORKER=>5, WARRIOR=>10}
        $queenBee->setBee_damage(1);                            // Setting $bee_damage
        $secondColony->setBee_queen($queenBee);                 // Set Queen to colony
        
        /** 
         * Initialise bee workers for Colony 2: Leafcutters
        */
        $num_worker_bees = mt_rand(15, 20);                         // Get random # of worker bees
        $bee_workers = array();                                     // Temp bee workers array to set to Colony
        for ($bee=1; $bee <= $num_worker_bees; $bee++) {            // Loop from 0 to # of worker bees
            $workerBee = new Bee ();                                   // Init Bee object
            $workerBee->setBee_id($bee);                               // Setting $bee_id
            $workerBee->setBee_type(2);                                // Setting $bee_type {1=>QUEEN, 2=> WORKER, 3=> WARRIOR}
            $workerBee->setBee_colony($secondColony->colony_id);       // Setting $bee_colony
            $workerBee->setBee_health(5);                              // Setting $bee_health = {QUEEN=>50, WORKER=>5, WARRIOR=>10}
            $workerBee->setBee_damage(mt_rand(2, 4));                  // Setting $bee_damage = random # between 2 and 4
            $bee_workers[$bee] = $workerBee;                           // Append object to array
        }                                                           // End loop
        $secondColony->setBee_workers($bee_workers);                // Set worker bee's array to colony

        /** 
         * Initialise bee warriors for Colony 2: Leafcutters
        */
        $num_warrios_bees = mt_rand($num_worker_bees+10, $num_worker_bees+15);  // Get random # of warrior bees and keep counting index from workers
        $bee_warriors = array();                                                // Temp warrior bees array to set to Colony
        for ($bee=$bee; $bee <= $num_warrios_bees; $bee++) {                    // Loop from 0 to # of warrior bees
            $warriorBee = new Bee ();                                               // Init Bee object
            $warriorBee->setBee_id($bee);                                           // Setting $bee_id
            $warriorBee->setBee_type(3);                                            // Setting $bee_type {1=>QUEEN, 2=> WORKER, 3=> WARRIOR}
            $warriorBee->setBee_colony($secondColony->colony_id);                   // Setting $bee_colony
            $warriorBee->setBee_health(10);                                         // Setting $bee_health = {QUEEN=>50, WORKER=>5, WARRIOR=>10}
            $warriorBee->setBee_damage(mt_rand(4, 7));                              // Setting $bee_damage = random # between 4 and 7
            $bee_warriors[$bee] = $warriorBee;                                      // Append object to array
        }                                                                       // End loop
        $secondColony->setBee_warriors($bee_warriors);                          // Set warrior bee's array to colony

        /** 
         * Initialise the zone of war
        */
        $this->warZone = new War_Zone();        // Init War_Zone object
        $this->warZone->setWar_quads(2);        // Set # of quadrants
        $this->warZone->setWar_x_size(18);      // Set X size of the war's zone
        $this->warZone->setWar_y_size(9);       // Set y size of the war's zone
        $this->warZone->setWar_colonies(array($firstColony->colony_id => $firstColony,
                                        $secondColony->colony_id =>$secondColony));     // Setting the colonies in the war
        $this->warZone->quadToColonies();       // Assing a quadrant to each colony 
        $this->warZone->beesToPositions();      // Find positions in the war's zone set the bees
        $war_x_size = $this->warZone->war_quad_x_size*count($this->warZone->war_colonies)-1; // Calculates the x size of a quadrant
        $war_y_size = $this->warZone->war_quad_y_size-1;    // Calculates the y size of a quadrant

        /** 
         * Serialize War_Zone object to send to .twig
        */
        $warJsonContent = $this->serializeWar_Zone($this->warZone);     // Serialize object which is been passed and received
        
        return $this->render('symfony/bee_war/bee_war.html.twig', [     // Render /beewar twig page
            'first_colony' => $firstColony->colony_name,
            'second_colony' => $secondColony->colony_name,
            'war_x_size' => $war_x_size,
            'war_y_size' => $war_y_size,
            'war_bees_positions' => $this->warZone->war_bees_positions,
            'warJsonContent' => $warJsonContent
        ]);
    }

    /** 
     * Custom serializer for War_Zone object
    */
    public function serializeWar_Zone(War_Zone $warZone){
        $encoder = [new JsonEncoder(), new XmlEncoder()];
        $extractor = new PropertyInfoExtractor([], [new PhpDocExtractor(), new ReflectionExtractor()]);
        $normalizer = [new ArrayDenormalizer(), new ObjectNormalizer(null, null, null, new class implements PropertyTypeExtractorInterface {
                                
            private $reflectionExtractor;

            public function __construct()
            {
                $this->reflectionExtractor = new ReflectionExtractor();
            }

            public function getTypes($class, $property, array $context = array())
            {
                if (is_a($class, War_Zone::class, true) && ('war_colonies' === $property)) {    // If war_colonies
                    return [                                                                    //
                    new Type(Type::BUILTIN_TYPE_OBJECT, true, Colony::class . "[]")             // init Colony object
                    ];
                }

                if (is_a($class, War_Zone::class, true) && ('war_bees_positions' === $property)) {  // If war_bees_positions
                    return [                                                                        //
                new Type(Type::BUILTIN_TYPE_OBJECT, true, Bee::class . "[]")                        // init Bee object
                    ];
                }

                if (is_a($class, Colony::class, true) && ('bee_workers' === $property || 'bee_warriors' === $property)) {   // If bee_workers or bee_warriors 
                    return [                                                                                                //
                    new Type(Type::BUILTIN_TYPE_OBJECT, true, Bee::class . "[]")                                            // init Bee object
                    ];
                } 
                return $this->reflectionExtractor->getTypes($class, $property, $context);
            }
        })];
        $extra_settings = [
            ObjectNormalizer::SKIP_NULL_VALUES => true,
            ObjectNormalizer::PRESERVE_EMPTY_OBJECTS => true
        ];
        $serializer = new Serializer($normalizer, $encoder, $extra_settings); // Init serializer

        return $serializer->serialize($warZone, 'json');    // Serialise and return War_Zone object of json type.

    }

    /** 
     * Custom deserializer for War_Zone object
    */
    public function deserializeWar_Zone(string $warZone){
        $encoder = [new JsonEncoder(), new XmlEncoder()];
        $extractor = new PropertyInfoExtractor([], [new PhpDocExtractor(), new ReflectionExtractor()]);
        $normalizer = [new ArrayDenormalizer(), new ObjectNormalizer(null, null, null, new class implements PropertyTypeExtractorInterface {
                                
            private $reflectionExtractor;

            public function __construct()
            {
                $this->reflectionExtractor = new ReflectionExtractor();
            }

            public function getTypes($class, $property, array $context = array())
            {
                if (is_a($class, War_Zone::class, true) && ('war_colonies' === $property)) {    // If war_colonies
                    return [                                                                    //
                    new Type(Type::BUILTIN_TYPE_OBJECT, true, Colony::class . "[]")             // init Colony object
                    ];
                }

                if (is_a($class, War_Zone::class, true) && ('war_bees_positions' === $property)) {  // If war_bees_positions
                    return [                                                                        //
                new Type(Type::BUILTIN_TYPE_OBJECT, true, Bee::class . "[]")                        // init Bee object
                    ];
                }

                if (is_a($class, Colony::class, true) && ('bee_workers' === $property || 'bee_warriors' === $property)) {   // If bee_workers or bee_warriors
                    return [                                                                                                //
                    new Type(Type::BUILTIN_TYPE_OBJECT, true, Bee::class . "[]")                                            // init Bee object
                    ];
                } 
                return $this->reflectionExtractor->getTypes($class, $property, $context);
            }
        })];
        $extra_settings = [
            ObjectNormalizer::SKIP_NULL_VALUES => true,
            ObjectNormalizer::PRESERVE_EMPTY_OBJECTS => true
        ];
        $serializer = new Serializer($normalizer, $encoder, $extra_settings); // Init serializer

        return $serializer->deserialize($warZone, War_Zone::class, 'json'); // Deserialize and return War_Zone object type.
    }

    /**
     * @Route("/beewar_act)", name="act_bee", methods={"POST","GET"})
     */
    public function actBee(Request $request){                                   // This is the main funct that enables the app logic/functionality
        if ($request->isXmlHttpRequest()) {                                     // If http request
            
            $warJsonContent = $request->request->get('warJsonContent');         // Get War_Zone serialized
            $data = $request->query->all();                                     // Get all extra data *Not in use*

            $this->warZone = $this->deserializeWar_Zone($warJsonContent);       // Deserialize json to War_Zone object type.

            $rules = new Rules($this->warZone);                                 // Init Rules object
            $game_over = false;                                                 // Var to control the end of the simulation
            $attacks = array('attacks'=> array(),'purge'=> array());            // Var to storage messages for the twig Console
            foreach ($this->warZone->war_bees_positions as $key => $bee) {      // Loop through all bees from war_bees_positions array of objects
                $beePossibleMovements = $rules->beePossibleMovements($bee);         // Get possible movements including bees around
                $beesAround = $beePossibleMovements['beesAroundMe'];                // Get only bees around
                
                $beeAttacked = $rules->attack($beesAround);                         // First attack to ONE OF THE BEES AROUND
                if(!empty($beeAttacked)){array_push($attacks['attacks'],[("Colony ".$bee->bee_colony." - bee ".$bee->bee_id." attacked colony ".$beeAttacked->bee_colony." - bee ".$beeAttacked->bee_id)]);} // Push message
                
                $purge_bee = !empty($beeAttacked)? $rules->purgeBee($beeAttacked) : false;  // Check if the attacked bee has < 0 health 
                if ($purge_bee != null && $purge_bee == true) {                             // If purge needed
                    $bee_to_purge = $rules->getBeeKeyByCoord([$beeAttacked->bee_x_position,$beeAttacked->bee_y_position]); // Get key of the attacked bee from war_bees_positions array of objects 
                    array_push($attacks['purge'],[("COLONY ".$bee->bee_colony." - BEE ".$bee->bee_id." PURGED COLONY ".$beeAttacked->bee_colony." - BEE ".$beeAttacked->bee_id)]); // Push purge message
                    unset($this->warZone->war_bees_positions[$bee_to_purge]);       // Remove attacked bee
                    $reindex = array_values($this->warZone->war_bees_positions);    // Normalise indexes
                    $this->warZone->war_bees_positions = $reindex;                  // Update indexes
                    if($beeAttacked->bee_type == 1){                                // If attacked bee is QUEEN
                        $game_over=true;                                            // THE SIMULATION IS OVER
                        $warJsonContent = $this->serializeWar_Zone($this->warZone); // Get War_Zone object serialized 
                        $winner = $bee->bee_colony;                                 // WHO IS THE WINNER
                        return new JsonResponse([$this->warZone,$warJsonContent,$attacks,$game_over, $winner]); // RETURN DATA SO FAR WITH WINNER
                    }
                }

            }

            foreach ($this->warZone->war_bees_positions as $bee) {                  // Loop through all bees from war_bees_positions array of objects
                $beePossibleMovements = $rules->beePossibleMovements($bee);             // Get possible movements including bees around
                $possibleMovements = $beePossibleMovements['possibleMovements'];        // Get only possible positions
                $response = $rules->beeOnTheMove($possibleMovements);                   // Move Bee
            }
            
            $warJsonContent = $this->serializeWar_Zone($this->warZone);                     // Serialize War_Zone object once again
            return new JsonResponse([$this->warZone,$warJsonContent,$attacks,$game_over]);  // Return data for the next round
        }
        return "Request failed";    // The request has failed
    }

    public function getWarZone()
    {
        return $this->warZone;
    }

    public function setWarZone(War_Zone $warZone)
    {
        $this->warZone = $warZone;

        return $this;
    }
}