<?php
// src/Controller/home_page/Init.php
namespace App\Controller\HomePage;

// use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Init extends AbstractController
{
	/**#
     * #@Route("/", name="home_page")
     #*/
    public function index()
    {
        // get the user information and notifications somehow
        $userFirstName = '...';
        $userNotifications = ['...', '...'];

        // the template path is the relative file path from `templates/`
        return $this->render('symfony/home_page/index.html.twig', [
        // return $this->render('symfony/data_visualisation/phd_student.html.twig', [
            // this array defines the variables passed to the template,
            // where the key is the variable name and the value is the variable value
            // (Twig recommends using snake_case variable names: 'foo_bar' instead of 'fooBar')
            'user_first_name' => $userFirstName,
            'notifications' => $userNotifications,
        ]);
    }

    /**
     * @Route("/phd_student", name="phd_student")
     */
     public function phdStudent()
     {
         // get the user information and notifications somehow
         $userFirstName = '...';
         $userNotifications = ['...', '...'];
 
         // the template path is the relative file path from `templates/`
        //  return $this->render('symfony/home_page/index.html.twig', [
         return $this->render('symfony/data_visualisation/phd_student.html.twig', [
             // this array defines the variables passed to the template,
             // where the key is the variable name and the value is the variable value
             // (Twig recommends using snake_case variable names: 'foo_bar' instead of 'fooBar')
             'user_first_name' => $userFirstName,
             'notifications' => $userNotifications,
         ]);
     }
}