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
        $formMapper->add('username', TextType::class);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('name');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('name');
    }

}




