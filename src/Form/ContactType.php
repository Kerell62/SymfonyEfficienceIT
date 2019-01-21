<?php
/**
 * Created by PhpStorm.
 * User: kerell
 * Date: 14/01/2019
 * Time: 15:49
 */

namespace App\Form;


use App\Entity\Contact;
use App\Entity\MailTo;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
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
            ->add('mailFrom',EmailType::class)
            ->add('message',TextareaType::class)
            ->add('mailTo', EntityType::class, [
                'class' => MailTo::class,
                'choice_label' => 'mail',
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class
        ]);
    }
}