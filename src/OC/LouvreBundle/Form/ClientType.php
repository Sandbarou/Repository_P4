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
            ->add('email',          EmailType::class)
            ->add('date',           DateType::class, array(
                'widget' => 'choice',
                'days' => range(1,31),
                'months' => range(1,12),
                'years' => range(date('Y'), date('Y') + 2),
                'format' => 'dd-MM-yyyy',
                'input' => 'datetime',
                'label' => 'Date de visite'
            ))
            ->add('number',         IntegerType::class, array(
                'attr' => array('min' => 1, 'max' => 9)
            ))
            ->add('save',           SubmitType::class, array(
                'label' => 'Poursuivre ma commande'
            ));
        
        
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
