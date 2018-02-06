<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyNumberHomeController
{
    /**
        * @Route("/")
      */
    public function indexAction()
    {
        $number = mt_rand(0,100);
        return new Response('The lucky number is ' . 
            $number. '!');
    }
}