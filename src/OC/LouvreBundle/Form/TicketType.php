<?php

namespace OC\LouvreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FormType;


class TicketType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
            $builder
            ->add('prenom',         TextType::class, array(
                'label' => 'Votre prénom',
            ))
            ->add('nom',            TextType::class, array(
                'label' => 'Votre nom',
            ))
            ->add('pays',           TextType::class, array(
                'label' => 'Votre pays',
            ))
            ->add('dateNaissance',  DateType::class, array(
                'widget' => 'single_text',
                'years' => range(date('Y') - 110, date('Y')),
                'label' => 'Votre date de naissance',
            ))
            ->add('tarifReduit',    CheckboxType::class, array(
                'required' => false,
                'label' => 'Si vous bénéficiez d\'une réduction, cochez la case',
            ))     
            ->add('valider',        SubmitType::class);
        ; 
            
    } 
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OC\LouvreBundle\Entity\Ticket'
        ));
    }
}
