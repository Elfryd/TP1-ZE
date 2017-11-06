<?php
/**
 * Created by PhpStorm.
 * User: geoffrey.polan
 * Date: 06/11/17
 * Time: 14:14
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HelloController extends Controller
{
    function index() {
        $valeur = "Hello World !!";

        return $this->render(
            'hello/hello.html.twig',['valeur' => $valeur,]
        );
    }

    /**
     * @return Response
     * @Route("/helloWorld2", name="hello_world2")
     */
    function hello2() {
        $valeur = "Hello World2 !!";

        return $this->render(
            'hello/hello2.html.twig',['valeur' => $valeur,]
        );
    }
}