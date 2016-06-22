<?php

namespace GrowupFrontendBundle\Controller;

use GrowupFrontendBundle\Form\IdeaType;
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
     * @Route("/photo",name="upload_user_photo")
     */

    public function userUploadPhoto(Request $request,User $user){
        $user=$this->getUser();
        $form = $this->createForm(IdeaType::class,$user);
        if ($form->isValid()) {
            $file = $user->getProfilImage();
            $fileName = $this->get('app.images_uploader')->upload($file);

            $user->setProfilImage($fileName);

        }
        return $this->redirect ($request->server->get ('HTTP_REFERER'));

    }
    

}
