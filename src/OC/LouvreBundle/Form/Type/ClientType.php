<?php

namespace OC\LouvreBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use OC\LouvreBundle\Entity\Client;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

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
    }


    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Client::class,
            'error_bubbling' => true
        ));
    }

}


