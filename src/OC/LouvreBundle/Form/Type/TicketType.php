<?php

namespace OC\LouvreBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use OC\LouvreBundle\Entity\Ticket;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Validator\Constraints\NotBlank;


class TicketType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder->add('firstName',          TextType::class, array(
                'label' => 'Prénom : ',
                'attr' => [
                    'placeholder' => 'Votre prénom',
                    'class' => 'form-control',
                ]
/*                'label_attr' => [
                    'class' => 'input-field col s1',
                ],
                'attr' => [
                    'class' => 'input-field col s3',
                ]*/
             ));    
        $builder->add('lastName',           TextType::class, array(
                'label' => 'Nom : ',
                'attr' => [
                    'placeholder' => 'Votre nom',
                    'class' => 'form-control',
                ]
/*                'label_attr' => [
                    'class' => 'input-field col s1',
                ],
                'attr' => [
                    'class' => 'input-field col s3',
                ]*/
            ));
        $builder->add('country',            TextType::class, array(
                'label' => 'Pays : ',
                'attr' => [
                    'placeholder' => 'Votre pays',
                    'class' => 'form-control',
                ]
/*                'label_attr' => [
                    'class' => 'input-field col s1',
                ],
                'attr' => [
                    'class' => 'input-field col s3',
                ]*/
            ));
        $builder->add('birthDate',          DateType::class, array(

/*                'label_attr' => [
                    'class' => 'col s1',
                    'for' => 'birthDate',
                ],*/

                'widget' => 'single_text',
                'label' => 'Date de naissance : ',
                'format' => 'yyyy-MM-dd',
                'years' => range(date('Y') - 120, date('Y')),
                'data' => new \Datetime(),
                'attr' => [
                    'class' => 'datepicker',
                    'data-provide' => 'datepicker',
                    'data-date-format' => 'yyyy-MM-dd'

                ]

/*                'widget' => 'choice',
                'days' => range(1,31),
                'months' => range(1,12),
                'years' => range(date('Y') - 120, date('Y')),
                'label' => 'Votre date de naissance',
                'format' => 'dd-MM-yyyy',
                'input' => 'datetime',*/
            ));
        $builder->add('discount',           CheckboxType::class, array(
                'label' => 'Tarif réduit',
                'value' => 'Oui',
                'required' => false,

/*                'label_attr' => [
                    'for' => 'filled-in-box',
                ],*/
/*                'attr' => [
                    'id' => 'filled-in-box',
                    'class' => 'filled-in',
                ]*/
            ));
/*          ->add('submit',                 SubmitType::class, array(
                'label' => 'Poursuivre ma commande' 
            ))*/
    }
    
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {       
        $resolver->setDefaults(array(
            //'data_class' => 'OC\LouvreBundle\Entity\Ticket',
            'data_class' => Ticket::class,
            'error_bubbling' => true
        ));
    }

    
    /**
     * @return string
     */
/*    public function getBlockPrefix()
    {
        return 'oc_louvrebundle_ticket';
    }*/
}
