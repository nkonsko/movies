<?php

namespace App\Form;

use App\Entity\Movie;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MovieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('length')
            ->add('plot')
            ->add('dateOrigin', DateTimeType::class, array(
                'attr' => array(
                    'class' => 'form-control datepicker_input',
                    'data-datepicker' => '',
                    'data-format' => 'dd-mm-yyyy HH:ii',
                ),
            ))
            ->add('categories')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Movie::class,
        ]);
    }
}
