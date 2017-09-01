<?php

namespace OC\LouvreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;


class ClientType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email',           EmailType::class, array(
                'label' => 'Votre adresse email',
            ))    
            ->add('dateVisite',      DateType::class, array(
                'widget' => 'single_text',
                'format' => 'dd-MM-yyyy',
                'label' => 'Date de visite',
            ))
            ->add('nombreTicket',    IntegerType::class, array(
                'label' => 'Nombre de billets',
                'attr' => array('min' => 1, 'max' => 20),
            ))
            ->add('valider',         SubmitType::class);
        
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OC\LouvreBundle\Entity\Client'
        ));
    }
}
