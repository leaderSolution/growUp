<?php

namespace GrowupFrontendBundle\Controller;

use GrowupFrontendBundle\Form\IdeaType;
use GrowupFrontendBundle\Form\IdentityPictureType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use GrowupFrontendBundle\Entity\Idea;
use GrowupFrontendBundle\Entity\User;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\HttpFoundation\Request;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;
use GrowupFrontendBundle\Repository\IdeaRepository;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class DefaultController extends Controller
{
    /**
     * @Route("/",name="home_page")
     */
    public function indexAction()
    {
        return $this->render('GrowupFrontendBundle:Default:index.html.twig');
    }
 
    /**
     * @Route("/profile", name="candidate_profile")
     */
    public function profileAction(Request $request){

        if ($user = $this->getUser()) {
            $id = $user->getId();
            $em = $this->getDoctrine()->getManager();
            $candidate = $em->getRepository('GrowupFrontendBundle:User')->findOneBy(array('id' => $id));
//

        }
        $idea = new Idea();
        $form = $this->createForm(IdeaType::class,$idea);


        //dump($ideas);die();
        $user=$this->getUser();
        $repo=$this->getDoctrine()->getManager()->getRepository('GrowupFrontendBundle:Idea');
        $ideas=$repo->fetchIdeas($user->getId());

        return $this->render('GrowupFrontendBundle:Candidate:profile.html.twig',
            array('candidate'=>$candidate,'form' => $form->createView(),'ideas'=>$ideas,

                ));

    }

    /**
     * @Route("/photo/new",name="new_pic")
     */

    public function userUploadPhoto(Request $request){
        $candidate= $this->getUser();

        $form = $this->createForm(IdentityPictureType::class,$candidate);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {


            /** @var \UploadedFile $file */
            $file = $candidate->getProfilImage();




            // Generate a unique name for the file before saving it
            /** @var TYPE_NAME $fileName */
            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            $file->move(
                $this->container->getParameter('kernel.root_dir') . '/../web/uploads/pictures/',
                $fileName
            );

            $candidate->setProfilImage($fileName);
            $em= $this->getDoctrine()->getEntityManager();
            $em->persist($candidate);
            $em->flush();

            $this->redirect ($request->server->get ('HTTP_REFERER'));


        }

        return $this->render('GrowupFrontendBundle:Candidate:_upload.html.twig',
           array('form' => $form->createView(),

            ));

    }
    

}
