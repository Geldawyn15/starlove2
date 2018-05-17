<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\FormBuilderInterface;

class FilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('gender',ChoiceType::class,
                array('choices' => array(
                    'Homme' => 'male',
                    'Femme' => 'female'),
                    'choices_as_values' => true,'multiple'=>false,'expanded'=>true))
            ->add('Statut',ChoiceType::class,
                array('choices' => array(
                    'Mort' => 'died',
                    'Vivant' => 'alive'),
                    'choices_as_values' => true,'multiple'=>false,'expanded'=>true))
            ->add('Age', RangeType::class, array(
                'attr' => array(
                    'min' => 18,
                    'max' => 700,
                    'step' => 1
                )));
    }

}