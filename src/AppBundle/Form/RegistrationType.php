<?php
/**
 * Created by PhpStorm.
 * User: dalius
 * Date: 18.11.23
 * Time: 22.27
 */

namespace AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('gender', ChoiceType::class, [
                'choices' => [
                    'Vyras' => 'Male', 'Moteris' => 'Female'
                ],
                'expanded' => true,
                'label' => 'form.iam',
                'label_attr' => [
                    'class' => 'radio-inline',
                ],
            ])
            ->add('city', ChoiceType::class, [
                'translation_domain' => 'FOSUserBundle',
                'choices' => [
                    'Vilnius' => 2, 'Kaunas' => 3, 'Klaipėda' => 4, 'Šiauliai' => 5,
                    'Panevėžys' => 6, 'Akmenė' => 7, 'Alytus' => 8, 'Anykščiai' => 9,
                    'Birštonas' => 10, 'Biržai' => 11, 'Druskininkai' => 12, 'Elektrėnai' => 13,
                    'Gargždai' => 14, 'Ignalina' => 15, 'Jonava' => 16, 'Joniškis' => 17,
                    'Jurbarkas' => 18, 'Kaišiadorys' => 19, 'Kalvarija' => 20, 'Kazlų Rūda' => 21,
                    'Kelmė' => 22, 'Kėdainiai' => 23, 'Kretinga' => 24, 'Kupiškis' => 25,
                    'Kuršėnai' => 26, 'Lazdijai' => 27, 'Marijampolė' => 28, 'Mažeikiai' => 29,
                    'Molėtai' => 30, 'Neringa' => 31, 'Pagėgiai' => 32, 'Pakruojis' => 33,
                    'Palanga' => 34, 'Pasvalys' => 35, 'Plungė' => 36, 'Prienai' => 37,
                    'Radviliškis' => 38, 'Raseiniai' => 39, 'Rietavas' => 40, 'Rokiškis' => 41,
                    'Skuodas' => 42, 'Šakiai' => 43, 'Šalčininkai' => 44, 'Šilalė' => 45,
                    'Šilutė' => 46, 'Širvintos' => 47, 'Švenčionys' => 48, 'Tauragė' => 49,
                    'Telšiai' => 50, 'Trakai' => 51, 'Ukmergė' => 52, 'Utena' => 53,
                    'Varėna' => 54, 'Vievis' => 55, 'Vilkaviškis' => 56, 'Visaginas' => 57,
                    'Zarasai' => 58
                ],
                'placeholder' => 'form.city',
            ])
            ->add('country', CountryType::class, [
                'translation_domain' => 'FOSUserBundle',
                'preferred_choices' => [
                    'GB', 'LT', 'LV',
                ],
                'expanded' => false,
                'multiple' => false,
                'placeholder' => 'form.country',
                'label' => false,
                'attr' => [
                ],
            ])
            ->add('date_of_birth', BirthdayType::class)
            ->remove('username');

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