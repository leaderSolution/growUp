<?php
/**
 * Created by PhpStorm.
 * User: achouri
 * Date: 27/05/2016
 * Time: 1:37 AM
 */

namespace GrowupFrontendBundle\Controller;

use GrowupFrontendBundle\Form\IdeaEditType;
use GrowupFrontendBundle\Form\IdeaType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use GrowupFrontendBundle\Entity\Idea;
use GrowupFrontendBundle\Entity\User;
use GrowupFrontendBundle\Form;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\HttpFoundation\Request;
use GrowupFrontendBundle\Repository\IdeaRepository;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class IdeaController extends Controller
{
    /**
     * @Route("/profile/new", name="new_idea")
     */

    public function newIdeaAction(Request $request){

        $idea = new Idea();
        $form = $this->get('form.factory')->create(IdeaType::class, $idea);

        $form->handleRequest($request);
        if ($form->isValid()) {
            $user=$this->getUser();
            $idea->setCandidate($user);
            //dump($form->getData());die();
            $em = $this->getDoctrine()->getManager();
            $em->persist($form->getData());
            $em->flush();

            return $this->redirectToRoute('candidate_profile');

        }


    }

    /**
     * Deletes a Idea entity.
     *
     * @Route("/profile/{id}", name="idea_delete")
     * @Method("GET")
     */
    public function deleteAction(Request $request, Idea $idea)
    {
            $em = $this->getDoctrine()->getManager();
            $em->remove($idea);
            $em->flush();


        return $this->redirectToRoute('candidate_profile');
    }
    /**
     * Displays a form to edit an existing Idea entity.
     *
     * @Route("/{id}/edit", name="edit_idea")
     *
     */
    public function editAction(Request $request, $id)
    {


        $em = $this->getDoctrine()->getManager();

        $Idea = $em->getRepository('GrowupFrontendBundle:Idea')->find($id);

        if (null === $Idea) {
            throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
        }

        $form = $this->get('form.factory')->create(IdeaEditType::class, $Idea);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            // Inutile de persister ici, Doctrine connait déjà notre annonce
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée.');

            //return $this->redirectToRoute('oc_platform_view', array('id' => $Idea->getId()));
        }

        return $this->render('GrowupFrontendBundle:Candidate:_edit-idea.html.twig', array(
            'idea' => $Idea,
            'form'   => $form->createView(),
        ));
    }

    /**
     *
     * @Route("/{id}/show", name="idea_show")
     */
    public function showAction($id){

        $em = $this->getDoctrine()->getManager();

        $ideas = $em->getRepository('GrowupFrontendBundle:Idea')->findOneBy(array('id'=>$id));
        return $this->render('GrowupFrontendBundle:Candidate:show-idea.html.twig', array(
            'idea' => $ideas,
        ));
    }

    }













