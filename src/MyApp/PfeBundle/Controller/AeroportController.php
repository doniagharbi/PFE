<?php
/**
 * Created by PhpStorm.
 * User: Donia GHARBI
 * Date: 30/05/2018
 * Time: 23:17
 */

namespace Tests\AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Tests\AppBundle\Entity\Aeroport;

class AeroportController extends Controller
{

    function AffichageAction()
    {
        return $this->render('@MyAppPfe/Aeroport/page1.html.twig');

    }

    function detailsAction(Request $req)
    {
        $x = $req->get('code'); //$_GET['id']
        $y = $req->get('libelle');
        $z = $req->get('heure_ouver');
        $t = $req->get('heure_ferm');
        return $this->render('@MyAppPfe/Aeroport/details.html.twig',
            array('code' => $x, 'libelle' => $y));
    }

    function AjoutAction(Request $request)
    {
        $aeroport = new Aeroport();
        $form = $this->createForm(AeroportType::class, $aeroport);
        //    var_dump($aeroport);
        if ($form->handleRequest($request)->isValid()) {
//    var_dump($aeroport);
            $em = $this->getDoctrine()->getManager();
            $em->persist($aeroport);
            $em->flush();
        }
        return $this->render('MyAppPfe:Aeroport:ajout.html.twig',
            array('f' => $form->createView()));

    }

    function deleteAction($code)
    {
        $em = $this->getDoctrine()->getManager();
        $aerop = $em->getRepository('MyAppPfeBundle:Aeroport')->find($code);

        $em->remove($aerop);
        $em->flush();
        return $this->redirectToRoute('PageAffichage');
    }
    function updateAction($code,Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $aerop=$em->getRepository('MyAppPfeBundle:Aeroport')->find($code);
        $form=$this->createForm(AeroportType::class,$aerop);
        if($form->handleRequest($request)->isValid())
        {
            $em->persist($aerop);
            $em->flush();
            return $this->redirectToRoute('PageAffichage');
        }
        return $this->render('@MyAppPfe/Aeroport/ajout.html.twig'
            ,array('f'=>$form->createView()));

    }


}