<?php
namespace AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, array('attr'=>array('maxlength'=>45, 'label'=> 'Username')))
            ->add('gender',ChoiceType::class,
                array('choices' => array(
                    'Homme' => 'male',
                    'Femme' => 'female'),
                    'choices_as_values' => true,'multiple'=>false,'expanded'=>true))
            ->add('age', IntegerType::class)
            ->add('galaxie', TextType::class)
            ->add('Espece',TextType::class,  array('attr'=>array('maxlength'=>45, 'label'=> 'Description')))
            ->add('mail', EmailType::class)
            ->add('password', RepeatedType::class, array(
                'type'=> PasswordType::class,
                'invalid_message'=> 'Le mot de passe ne correspond pas',
                'options'=>array ('attr'=> array('class'=> 'password-field')),
                'required'=> true,
                'first_options'=>array('label'=>'password'),
                'second_options'=>array('label'=>'repeat password'),
            ));
        }


}