<?php

namespace OC\LouvreBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use OC\LouvreBundle\Entity\Visit;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Validator\Constraints\NotBlank;

class VisitType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date',           DateType::class, array(
                'widget' => 'single_text',
                'label' => 'Veuillez sélectionner une date de visite',
                'label_attr' => [
                    'font-family' => 'Roboto',
                ],
                'format' => 'yyyy-MM-dd',
                'constraints' => array(
                    new NotBlank(array("message" => "Merci de sélectionner une date de visite")),
                ),
                'data' => new \Datetime(),
                'attr' => [
                    'class' => 'datepicker',
                    'data-provide' => 'datepicker',
                    'data-date-format' => 'yyyy-MM-dd',
                ]
            ))

            ->add('number',         ChoiceType::class, array(
                'label' => 'Veuillez sélectionner le nombre de visiteurs',
                'constraints' => array(
                    new NotBlank(array("message" => "Merci de sélectionner le nombre de visiteurs")),
                ),
                'choices' => array(
                    'Nombre de visiteurs' => array(
                        '1' => 1,
                        '2' => 2,
                        '3' => 3,
                        '4' => 4,
                        '5' => 5,
                        '6' => 6,
                        '7' => 7,
                        '8' => 8,
                        '9' => 9,
                    )),
                'attr' => [
                    'class' => 'input-field col s12',
                ]
            ))

            ->add('fullday',         ChoiceType::class, array(
                'label' => 'Visite journée ou demi-journée',
                'choices' => array(
                    'Journée ou demi-journée' => array(
                        'Journée complète' => false,
                        'Demi-journée' => true,
                    )),
            ));
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Visit::class,
            'error_bubbling' => true
        ));
    }

}


