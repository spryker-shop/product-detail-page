<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\ProductDetailPage\Resolver;

use Generated\Shared\Transfer\ShopContextTransfer;
use Spryker\Service\Container\ContainerInterface;

class ShopContextResolver implements ShopContextResolverInterface
{
    protected const SERVICE_SHOP_CONTEXT = 'SERVICE_SHOP_CONTEXT';

    /**
     * @var \Spryker\Service\Container\ContainerInterface
     */
    protected $container;

    /**
     * @param \Spryker\Service\Container\ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * @return \Generated\Shared\Transfer\ShopContextTransfer
     */
    public function resolve(): ShopContextTransfer
    {
        return $this->container->has(static::SERVICE_SHOP_CONTEXT) ? $this->container->get(static::SERVICE_SHOP_CONTEXT) : new ShopContextTransfer();
    }
}
