<?php

namespace AppBundle\Controller;

use AppBundle\Form\MenuType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MenuController extends Controller
{
    /**
     * @param Request $request
     * @param $_day 
     * @return Controller
     *
     * @Route("/add/{_day}",
     *     requirements={"_day" = "monday|tuesday|wednesday|thursday|friday|saturday|sunday"},
     *     defaults={"_day" = "monday"},
     *     name="add_menu")
     */
    public function addAction(Request $request, $_day)
    {
        $em = $this->getDoctrine()->getManager();

        /*On efface toute l'ancienne semaine au premier jour de la semaine
        de l'user pour éviter de se retrouver avec plein de doublons*/

        if ($_day === 'monday'){
            $weekRepo = $this->getDoctrine()->getRepository('AppBundle:Menu')
                ->findBy(['user' => 1]); // findby en dur pour dev algo
            foreach ($weekRepo as $item) {
                $em->remove($item);
            }
            $em->flush();
            ;

        }

        //Calcule du lendemain pour préparer la future route
        $days = [
            'monday',
            'tuesday',
            'wednesday',
            'thursday',
            'friday',
            'saturday',
            'sunday'
        ];

        $tomorrow = '';

        foreach ($days as $k=>$day){
            if ($_day === $day){
                if ($day !== 'sunday'){
                    $tomorrow = $days[$k + 1];
                }
            }
        }
        dump($tomorrow); //TODO remove it

        $form = $this->createForm(MenuType::class);

        $form->handleRequest($request);
        $data = $form->getData();

        if ($form->isValid()){
            
            $data
                ->setUser('1') // TODO à créer lorsque FOSUserBundle sera implémenté
                ->setDay($_day)
                ->setCreatedAt(new \DateTime())
            ; //for test
            $em->persist($data);
            $em->flush();

            if ($_day !== 'sunday'){
                return $this->redirectToRoute('add_menu', ['_day' => $tomorrow]);
            } else {
                return $this->redirectToRoute('homepage');

            }

        }

        return $this->render(':add:add.html.twig', [
            'form' => $form->createView(),
            'day' => $_day
        ]);
    }
}
