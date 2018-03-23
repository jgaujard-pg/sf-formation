<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class TestController extends Controller {

    public function test()
    {
        return new Response(
            '<html><body>OK, Symfony is installed</body></html>'
        );
    }
}