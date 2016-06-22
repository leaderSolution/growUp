<?php

namespace GrowupFrontendBundle\Form;

use FOS\UserBundle\Util\LegacyFormHelper;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('first_name',null,array('attr'   =>  array(
        'class'   => 'form-control','placeholder'=>'Your first name...')));

        $builder->add('last_name',null,array('attr'   =>  array(
            'class'   => 'form-control','placeholder'=>'Your last name...')));

        $builder->add('last_degree',LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\ChoiceType'),array('choices' => array(
            'Licence fondamentale' => 'LF',
            'Licence appliquée' => 'LA',
            'Master de recherche' => 'MR',
            'Master professionnel' => 'MP',
            'Diplôme d`ingénieur'=>'ING',


        ),'attr'   =>  array(
            'class'   => 'form-control','placeholder'=>'Your first name...')));
        $builder->add('specialty',LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\ChoiceType'),array(
            'attr'   =>  array('class'   => 'form-control','placeholder'=>'Your first name...'),
            'choices'=>array('Informatique'=>'info',
                             'Télécommunication'=>'com',
                             'Gestion appliqué à l` informatiques'=>'GAI',
                             'Marketing'=>'marketing')
        ));

        $builder->add('facebook',LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\UrlType'),array('attr'   =>  array(
            'class'   => 'form-control','placeholder'=>'Your facebook profile Url...')));

        $builder->add('twitter',LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\UrlType'),array('attr'   =>  array(
            'class'   => 'form-control','placeholder'=>'Your twitter profile Url...')));

        $builder->add('google_plus',LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\UrlType'),array('attr'   =>  array(
            'class'   => 'form-control','placeholder'=>'Your Google+ profile Url...')));

        $builder->add('github',LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\UrlType'),array('attr'   =>  array(
            'class'   => 'form-control','placeholder'=>'Your Github profile Url...')));

    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}