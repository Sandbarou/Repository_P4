<?php

namespace OC\LouvreBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use OC\LouvreBundle\Entity\Client;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ClientType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
            $builder->add('email',          EmailType::class, array(
                'label' => 'Adresse email : ',
                'attr' => [
                    'placeholder' => ' email@email.fr',
                    'class' => 'form-control',
                ]
                ));
        
            $builder->add('tickets',        CollectionType::class, array(
                'label'         => false,
                'entry_options' => [
                    'label' => false,
                ],
                'entry_type'    => TicketType::class,
                'allow_add'     => true,
                'allow_delete'  => true,
                'prototype'     => true,
                'by_reference'  => true,
                'delete_empty'  => true,
                'attr'          => [
                    // Here is the selector for "cities" collection
                    'class' => 'collection-tickets',
                ]
                ));
        
/*            $builder->add('save',           SubmitType::class, [
                'label' => 'Valider mes tickets',
                'attr'  => [
                    // Here is the selector for "cities" collection
                    'class' => 'btn btn-success',
                ]
                ])*/;

    }
    
/*            $builder->add('cities', CollectionType::class, [
            'label'         => 'Regions or cities you wish to visit',
            'entry_type'    => CityType::class,
            'entry_options' => [
                'label' => false,
            ],
            'allow_add'     => true,
            'allow_delete'  => true,
            'prototype'     => true,
            'required'      => false,
            'by_reference'  => true,
            'delete_empty'  => true,
            'attr'          => [
                // Here is the selector for "cities" collection
                'class' => 'collection-cities',
            ],
        ]);*/
    
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            //'data_class' => 'OC\LouvreBundle\Entity\Client',
            'data_class' => Client::class,
            'error_bubbling' => true
        ));
    }


    /**
     * @return string
     */
/*    public function getBlockPrefix()
    {
        return 'oc_louvrebundle_client';
    }*/
}
