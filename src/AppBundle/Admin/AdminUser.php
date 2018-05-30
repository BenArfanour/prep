<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 28/05/18
 * Time: 13:37
 */

namespace AppBundle\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class AdminUser  extends AbstractAdmin
{

    protected function configureFormFields(FormMapper $formMapper)
            {
                $formMapper

                    ->with('Nouveau Employé', ['class' => 'col-md-6'])

                             ->add('username',TextType::class)
                             ->add('nom',TextType::class)
                             ->add('prenom',TextType::class)
                             ->add('email',TextType::class)
                             ->add('datenaissance','sonata_type_date_picker', array(
                                 'label'=>'Date de Naissance',
                                 'dp_language'=>'fr',
                                 'format'=>'dd/MM/yyyy'
                             ))
                    ->end()
                    ->with('Mot de Passe ', ['class' => 'col-md-6'])

                             ->add('plainPassword', 'repeated', array(
                                 'type' => 'password',
                                 'options' => array('translation_domain' => 'FOSUserBundle'),
                                 'first_options' => array('label' => 'form.password'),
                                 'second_options' => array('label' => 'form.password_confirmation'),
                                 'invalid_message' => 'fos_user.password.mismatch',
                                ))

                    ->end();
            }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
    }

    protected function configureListFields(ListMapper $listMapper)

    {
        $listMapper
            ->add('nom',TextType::class)
            ->add('prenom',TextType::class)
            ->add('datenaissance', 'date', array(
                'pattern' => 'dd MMM y G',
                'locale' => 'fr',
                'timezone' => 'Europe/Paris',
            ))
            ->add('email',TextType::class);

    }

}





