<?php
/**
 * Created by PhpStorm.
 * User: achouri
 * Date: 29/05/2016
 * Time: 9:14 PM
 */

namespace GrowupFrontendBundle\Form;

use FOS\UserBundle\Util\LegacyFormHelper;
use Doctrine\ORM\EntityRepository;
use GrowupFrontendBundle\Repository\UserRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use GrowupFrontendBundle\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;

class IdeaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
     $builder->add('title',TextType::class,
         array('attr'   =>  array(
             'class'   => 'form-control',)))
         ->add('shortDescription',TextareaType::class,
             array('attr'   =>  array(
                 'class'   => 'form-control',)))
         ->add('elaborateDescription',CKEditorType::class,
             array('attr'   =>  array(
                 'class'   => 'form-control',
             ),
                 'config' => array(
                     'uiColor' => '#ffffff',
                     //...
                 ),));

    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GrowupFrontendBundle\Entity\Idea',
        ));
    }


    }