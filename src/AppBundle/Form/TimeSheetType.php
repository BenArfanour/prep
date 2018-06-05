<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;



class TimeSheetType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                 ->add('type','choice', array(
                  'choices'=> array ('Congé'=>'Congé' , 'Maladie'=>'Maladie' ,'Férié'=>'Férié'),
                  'expanded' => true,
                  'multiple' =>  false,
                   'label' => 'Type :'
                     ))

                 ->add('sheeets', 'entity', array(
                  'class' => 'AppBundle\Entity\Projet',
                  'property' => 'nom',
                  'expanded' => false,
                  'multiple' => false,
                  'label'    => 'Porjet :',
                 ))


               ->add('startDatetime',DateType::class , array (
                          'widget'=>'single_text',
                          'label' => 'Date de Début :',
                          ))



              ->add('endDatetime',DateType::class , array (
                'widget'=>'single_text',
                'label' => 'Date de Fin :',
            ));

    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\TimeSheet'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_timesheet';
    }


}
