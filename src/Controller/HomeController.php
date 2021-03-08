<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    public function index():Response
    {
        $connection = $this->getDoctrine()->getConnection();
        if($connection) {
            return new Response('<html><body>Ca marche</body></html>');
        }
        return new Response(
          '<html><body>Welcome to Projectoo</body></html>'
        );
    }
}