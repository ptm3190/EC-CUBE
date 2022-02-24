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

namespace Plugin\StoreReview\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Annotation as Eccube;

/**
 * @Eccube\EntityExtension("Plugin\ProductReview4\Entity\ProductReview")
 */
trait StoreReviewTrait
{
    /**
     * @var string
     *
     * @ORM\Column(name="store_review", type="text", nullable=true)
     */
    private $store_review;

    /**
     * Get store_review.
     *
     * @return string
     */
    public function getStoreReview()
    {
        return $this->store_review;
    }

    /**
     * Set store_review.
     *
     * @param string $store_review
     *
     * @return ProductReview
     */
    public function setStoreReview($store_review)
    {
        $this->store_review = $store_review;

        return $this;
    }
}
