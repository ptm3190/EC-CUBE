<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\StoreReview\Form\Extension;
use Eccube\Form\Type\Master\SexType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Plugin\ProductReview4\Form\Type\ProductReviewType;
use Symfony\Component\Form\AbstractTypeExtension;

/**
 * Class StoeReviewType.
 * [商品レビュー]-[レビュー管理]用Form.
 */
class StoreReviewExtension extends AbstractTypeExtension
{
    /**
     * Build form.
     *
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('store_review', TextareaType::class);
    }

    /**
     * {@inheritdoc}
     */
    public function getExtendedType()
    {
        return ProductReviewType::class;
    }

    /**
     * Return the class of the type being extended.
     */
    public static function getExtendedTypes(): iterable
    {
        // return FormType::class to modify (nearly) every field in the system
        return [ProductReviewType::class];
    }
}
