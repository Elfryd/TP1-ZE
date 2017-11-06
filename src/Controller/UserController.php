<?php
/**
 * Created by PhpStorm.
 * User: Geoffrey
 * Date: 06/11/2017
 * Time: 20:43
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class UserController extends Controller
{
    private $tabUser;
    /**
     * @return Response
     * @Route("/userList", name="users")
     */
    public function index() {
        $tabUser = array();
        for($i = 0; $i < 10; $i++)
        {
            $tabUser[$i] = new User("geoffrey","polan","Elryd#3660","Elfryd@github,","geoffreypolan@orange.fr");
        }
        return $this->render('user/user.html.twig',['tabUser'=>$tabUser]);
    }
}