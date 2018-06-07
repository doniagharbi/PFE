<?php
/**
 * Created by PhpStorm.
 * User: Donia GHARBI
 * Date: 30/05/2018
 * Time: 23:21
 */

namespace Tests\AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ClientController extends Controller
{
public function indexAction()
{return new Response("bonjour ");

}
}