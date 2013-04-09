<?php

namespace Teaser\TeaserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BlogType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('body')
            ->add('created')
            ->add('updated')
            ->add('country', 'genemu_jqueryselect2_country')
            ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Teaser\TeaserBundle\Entity\Blog'
        ));
    }

    public function getName()
    {
        return 'teaser_teaserbundle_blogtype';
    }
}
