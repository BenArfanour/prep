<?php

namespace AppBundle\Controller;

use AppBundle\Entity\TimeSheet;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\Query;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * Timesheet controller.
 *
 * @Route("timesheet")
 */
class TimeSheetController extends Controller
{
    /**
     * Lists all timeSheet entities.
     *
     * @Route("/", name="timesheet_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $timeSheets = $em->getRepository('AppBundle:TimeSheet')->findAll();

        return $this->render('timesheet/index.html.twig', array(
            'timeSheets' => $timeSheets,
        ));
    }


    public function CalendarAction() {
        return $this->render('::Timesheet/calendar.html.twig');
    }


    /**
     * Creates a new timeSheet entity.
     *
     * @Route("/new", name="timesheet_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $timeSheet = new Timesheet();
        $user = $this->getUser(); // user connecté
        $form = $this->createForm('AppBundle\Form\TimeSheetType', $timeSheet);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
             $em = $this->getDoctrine()->getManager();
             $projetform = $form['sheeets']->getData()->getNom();
            // on récupére le projet qu'on a saisie
            $repository = $this->getDoctrine()->getRepository('AppBundle:Projet');
            $query = $repository->createQueryBuilder('p')
                ->where('p.nom = :data')
                ->setParameter('data', $projetform)
                ->getQuery();
                 $projet = $query->getSingleResult();

            $type =   $form['type']->getData();
           
            if ($type == 'congé') {
                $timeSheet->setBgColor('blue');
            }
            if ($type == 'Maladie') {
                $timeSheet->setBgColor('green');
            }
            if ($type == 'Férié') {
                $timeSheet->setBgColor('yellow');
            }
            $timeSheet->setSheets($user);
            $timeSheet->setSheeets($projet);
            $em->persist($timeSheet);
            $em->flush();

            return $this->redirectToRoute('calendar');
        }

        return $this->render('timesheet/new.html.twig', array('timeSheet' => $timeSheet, 'form' => $form->createView(),));
    }

    /**
     * Finds and displays a timeSheet entity.
     *
     * @Route("/{id}", name="timesheet_show")
     * @Method("GET")
     */
    public function showAction(TimeSheet $timeSheet)
    {
        $deleteForm = $this->createDeleteForm($timeSheet);

        return $this->render('timesheet/show.html.twig', array(
            'timeSheet' => $timeSheet,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing timeSheet entity.
     *
     * @Route("/{id}/edit", name="timesheet_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, TimeSheet $timeSheet)
    {
        $deleteForm = $this->createDeleteForm($timeSheet);
        $editForm = $this->createForm('AppBundle\Form\TimeSheetType', $timeSheet);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('timesheet_edit', array('id' => $timeSheet->getId()));
        }

        return $this->render('timesheet/edit.html.twig', array(
            'timeSheet' => $timeSheet,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a timeSheet entity.
     *
     * @Route("/{id}", name="timesheet_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, TimeSheet $timeSheet)
    {
        $form = $this->createDeleteForm($timeSheet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($timeSheet);
            $em->flush();
        }

        return $this->redirectToRoute('timesheet_index');
    }

    /**
     * Creates a form to delete a timeSheet entity.
     *
     * @param TimeSheet $timeSheet The timeSheet entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TimeSheet $timeSheet)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('timesheet_delete', array('id' => $timeSheet->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
