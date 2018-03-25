<?php
/**
 * Created by PhpStorm.
 * User: diego
 * Date: 26/03/18
 * Time: 00:24
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    public function index()
    {
        return new Response('poulp', 200);
    }
}