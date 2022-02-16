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

namespace Plugin\HogePlugin\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Eccube\Controller\AbstractController;
use Eccube\Repository\ProductRepository;

// 記述0215
class IndexController extends AbstractController
{
    public function __construct(ProductRepository $ProductRepository)
    {
        $this->ProductRepository = $ProductRepository;
    }

    /**
     * @Route("/hogeplugin/hello")
     * @Template("HogePlugin/Resource/template/index.twig")
    */

     public function index(Request $request)
    {
        $Product = $this->ProductRepository->find(1);
        $Product->setName('彩のジェラートCUBE');
        $this->entityManager->persist($Product);
        $this->entityManager->flush($Product);

        return [
            'sample' => 'aaaa',
            'Product' => $Product
        ];
    }
}
