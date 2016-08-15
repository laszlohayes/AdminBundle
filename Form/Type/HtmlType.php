<?php
/**
 * Date: 13.10.15
 *
 * @author Portey Vasil <portey@gmail.com>
 */

namespace Youshido\AdminBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class HtmlType extends AbstractType
{

    public function getParent()
    {
        return TextareaType::class;
    }

    public function getBlockPrefix()
    {
        return 'html';
    }

    public function getName()
    {
        return 'html';
    }
}
