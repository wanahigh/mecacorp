<?php
/**
 * Created by PhpStorm.
 * User: fabien
 * Date: 16/01/18
 * Time: 12:27
 */

namespace Acme\ActuBundle\Form\Entity;


use Acme\ActuBundle\Entity\Entity\Advert;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
class CategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title')->add('user',EntityType::class)->add('title')->add('content ');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Advert::class,
        ));
    }
}