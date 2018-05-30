<?php
/**
 * Created by PhpStorm.
 * User: hamza
 * Date: 30/05/18
 * Time: 08:57
 */

namespace AppBundle\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class AdminClient  extends AbstractAdmin
{


    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper

            ->with('Nouveau Client', ['class' => 'col-md-6'])

            ->add('nom',TextType::class)
            ->add('pays',TextType::class)

            ->end();
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
    }

    protected function configureListFields(ListMapper $listMapper)

    {
        $listMapper
            ->add('nom',TextType::class)
            ->add('pays',TextType::class);

    }

}