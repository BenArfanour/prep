<?php
/**
 * Created by PhpStorm.
 * User: hamza
 * Date: 29/05/18
 * Time: 11:12
 */

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\CoreBundle\Form\Type\DatePickerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;



class AdminProjet extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Nouveau Projet', ['class' => 'col-md-6'])
            ->add('nom',TextType::class)
            ->add('startDate','sonata_type_date_picker', array(
                'label'=>'Date de début',
                'dp_language'=>'fr',
                'format'=>'dd/MM/yyyy'
            ))
            ->add('endDate','sonata_type_date_picker', array(
                'label'=>'Date de prise de fonction',
                'dp_language'=>'fr',
                'format'=>'dd/MM/yyyy'
            ))
            ->end()

        ->with('Nouveau Client', ['class' => 'col-md-3'])
        ->add ('nom',TextType::class)
        ->add('nom',TextType::class)
        ->end() ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
    }

    protected function configureListFields(ListMapper $listMapper)

    {

    }

}