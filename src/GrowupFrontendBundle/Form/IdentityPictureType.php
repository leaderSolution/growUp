<?php
/**
 * Created by PhpStorm.
 * User: achouri
 * Date: 07/06/2016
 * Time: 11:32 AM
 */

namespace GrowupFrontendBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class IdentityPictureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('profilImage', FileType::class,array('data_class' => null))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GrowupFrontendBundle\Entity\User',
        ));
    }
}