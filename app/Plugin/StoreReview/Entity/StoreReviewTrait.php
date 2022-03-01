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

    // ⬇︎0225記述　ProductReviewテーブルにmember_idを格納できるカラムを作成
    /**
     * @var string
     *
     * @ORM\Column(name="member_id", type="integer", nullable=true)
     */
    private $member_id;

    /**
     * Get menber_id.
     *
     * @return string
     */
    public function getMemberId()
    {
        return $this->member_id;
    }

    /**
     * Set member_id.
     *
     * @param string $menber_id
     *
     * @return ProductReview
     */
    public function setMemberId($member_id)
    {
        $this->member_id = $member_id;

        return $this;
    }
}
