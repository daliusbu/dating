<?php
/**
 * Created by PhpStorm.
 * User: dalius
 * Date: 18.11.23
 * Time: 22.27
 */

namespace AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('gender', ChoiceType::class, [
                'choices'=>[
                    'Vyras'=>'Male', 'Moteris'=>'Female'
                ],
                'expanded'=>true,
                'label'=>'Aš esu',
                'label_attr'=>[
                    'class'=>'radio-inline',
                    ],

            ])
            ->add('city')
            ->add('country', ChoiceType::class, [
                'choices'=>[
                    'Lietuva'=>'LT', 'Rusija'=>'RU', 'Anglija'=>'EN',
                ],
                'expanded'=>false,
            ])
            ->add('date_of_birth')
            ->remove('username')
    ;

    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

//    public function configureOptions(OptionsResolver $resolver)
//    {
//        $resolver->setDefaults(array(
//            'data_class' => $this->class,
//            'csrf_token_id' => 'registration',
//        ));
//    }


}