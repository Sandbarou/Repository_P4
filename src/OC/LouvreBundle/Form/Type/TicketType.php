<?php

namespace OC\LouvreBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use OC\LouvreBundle\Entity\Ticket;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

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
        ));

        $builder->add('lastName',           TextType::class, array(
            'label' => 'Nom : ',
            'attr' => [
                'placeholder' => 'Votre nom',
                'class' => 'form-control',
            ]
        ));

        $builder->add('country',            TextType::class, array(
            'label' => 'Pays : ',
            'attr' => [
                'placeholder' => 'Votre pays',
                'class' => 'form-control',
            ]
        ));

        $builder->add('birthDate',          DateType::class, array(
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
        ));

        $builder->add('discount',           CheckboxType::class, array(
            'label' => 'Tarif réduit',
            'value' => 'Oui',
            'required' => false,
        ));

    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Ticket::class,
            'error_bubbling' => true
        ));
    }

}


