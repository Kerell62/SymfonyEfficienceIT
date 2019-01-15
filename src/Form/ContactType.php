<?php
/**
 * Created by PhpStorm.
 * User: kerell
 * Date: 14/01/2019
 * Time: 15:49
 */

namespace App\Form;


use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName',TextType::class)
            ->add('lastName',TextType::class)
            ->add('mailSend',EmailType::class)
            ->add('message',TextareaType::class)
            ->add('mailReceive', ChoiceType::class, array(
                'choices' => array(
                    'Admin' => 'admin@gmail.com',
                    'Reseau' => 'reseau@gmail.com',
                    'Compta' => 'compta@gmail.com',
                    'test' => 'oxx.59.62@gmail.com',
                ),
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class
        ]);
    }
}