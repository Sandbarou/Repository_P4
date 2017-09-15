<?php

namespace OC\LouvreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class TicketType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName',          TextType::class)
            ->add('lastName',           TextType::class)
            ->add('country',            TextType::class)
            ->add('birthDate',          DateType::class, array(
                'widget' => 'choice',
                'days' => range(1,31),
                'months' => range(1,12),
                'years' => range(date('Y') - 120, date('Y')),
                'label' => 'Votre date de naissance',
                'format' => 'dd-MM-yyyy',
                'input' => 'datetime'
            ))
            ->add('discount',           ChoiceType::class, array(
                'choices'  => array(
                'Non' => false,    
                'Oui' => true
            ),
                // *this line is important*
                'choices_as_values' => true,
                'label' => 'Tarif réduit'
            ))
            ->add('save',         SubmitType::class, array(
                'label' => 'Valider ma commande'
            ));
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
