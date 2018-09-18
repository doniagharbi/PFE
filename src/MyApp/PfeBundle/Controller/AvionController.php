<?php
/**
 * Created by PhpStorm.
 * User: Donia GHARBI
 * Date: 30/05/2018
 * Time: 23:16
 */

namespace MyApp\PfeBundle\Controller;


use MyApp\PfeBundle\Entity;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AvionController extends Controller
{
    function AffichageAction()
    {
        return $this->render('@MyAppPfe/Avion/page2.html.twig');

    }


    function AjoutAction(Request $request)
    {
        $avion = new Avion();
        $form = $this->createForm(AvionType::class, $avion);
        if ($form->handleRequest($request)->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($avion);
            $em->flush();
        }
        return $this->render('MyAppPfe:Avion:ajout.html.twig',
            array('f' => $form->createView()));

    }

    function deleteAction($code)
    {
        $em = $this->getDoctrine()->getManager();
        $vol1 = $em->getRepository('MyAppPfeBundle:Avion')->find($code);

        $em->remove($vol1);
        $em->flush();
        return $this->redirectToRoute('PageAffichage');
    }
    function updateAction($code,Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $vol1=$em->getRepository('MyAppPfeBundle:Avion')->find($code);
        $form=$this->createForm(AvionType::class,$vol1);
        if($form->handleRequest($request)->isValid())
        {
            $em->persist($vol1);
            $em->flush();
            return $this->redirectToRoute('PageAffichage');
        }
        return $this->render('@MyAppPfe/Avion/ajout.html.twig'
            ,array('f'=>$form->createView()));

    }


}