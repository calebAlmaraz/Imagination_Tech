<?php
// src/Controller/Exercises/Exercises.php
namespace App\Controller\Exercises;

// use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Controller\Exercises\Data_Structures;

class Exercises extends AbstractController
{
	/**#
     * #@Route("/exercises", name="exercises")
     #*/
    public function index()
    {
        // get the user information and notifications somehow
        $userFirstName = '...';
        $userNotifications = ['...', '...'];

        // the template path is the relative file path from `templates/`
        return $this->render('symfony/exercises/exercises.html.twig', [
        // return $this->render('symfony/data_visualisation/phd_student.html.twig', [
            // this array defines the variables passed to the template,
            // where the key is the variable name and the value is the variable value
            // (Twig recommends using snake_case variable names: 'foo_bar' instead of 'fooBar')
            'user_first_name' => $userFirstName,
            'notifications' => $userNotifications,
        ]);
    }

    /**
     * @Route("/exercises/{exercises})", name="exercises_render", methods={"POST","GET"})
     */
    public function render_to_resume(string $exercises, Request $request){
        if ($request->isXmlHttpRequest()) {         
            return new JsonResponse(array('data' => 'this is a json response'));
        }
    
        //If it's not an Ajax request render again the same page
        return $this->render('symfony/exercises/exercises.html.twig', [
            // (Twig recommends using snake_case variable names: 'foo_bar' instead of 'fooBar')
            'message' => $message
        ]);
    }

    /**
     * @Route("/exerciseVariables/{exercises})", name="exercise_variables", methods={"POST","GET"})
     */
    public function exerciseVariables(string $exercises, Request $request){
        $Data_Structures = new Data_Structures("Public variable","Protected variable", "Private variable");
        
        if ($request->isXmlHttpRequest()) {         
            return new JsonResponse(array('data' => $Data_Structures->get_variables()));
        }
    
        //If it's not an Ajax request render again the same page
        return $this->render('symfony/exercises/exercises.html.twig', [
            // (Twig recommends using snake_case variable names: 'foo_bar' instead of 'fooBar')
            'message' => $message
        ]);
    }
}