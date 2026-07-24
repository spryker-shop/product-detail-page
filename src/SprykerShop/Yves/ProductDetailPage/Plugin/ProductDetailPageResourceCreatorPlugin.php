<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\ProductDetailPage\Plugin;

use Spryker\Shared\ProductStorage\ProductStorageConstants;
use Spryker\Yves\Kernel\AbstractPlugin;
use SprykerShop\Yves\ProductDetailPage\Controller\ProductController;
use SprykerShop\Yves\ShopRouterExtension\Dependency\Plugin\ResourceCreatorPluginInterface;

/**
 * @deprecated Use {@link \SprykerShop\Yves\ProductDetailPage\Plugin\StorageRouter\ProductDetailPageResourceCreatorPlugin} instead.
 *
 * @method \SprykerShop\Yves\ProductDetailPage\ProductDetailPageFactory getFactory()
 */
class ProductDetailPageResourceCreatorPlugin extends AbstractPlugin implements ResourceCreatorPluginInterface
{
    /**
     * {@inheritDoc}
     *
     * @return string
     */
    public function getType()
    {
        return ProductStorageConstants::PRODUCT_ABSTRACT_RESOURCE_NAME;
    }

    /**
     * {@inheritDoc}
     *
     * @return string
     */
    public function getModuleName()
    {
        return 'ProductDetailPage';
    }

    /**
     * {@inheritDoc}
     *
     * @return string
     */
    public function getControllerName()
    {
        return 'Product';
    }

    /**
     * {@inheritDoc}
     *
     * @return string
     */
    public function getActionName()
    {
        return 'detail';
    }

    /**
     * {@inheritDoc}
     *
     * @param array<string, mixed> $data
     *
     * @return array
     */
    public function mergeResourceData(array $data)
    {
        return [
            ProductController::ATTRIBUTE_PRODUCT_DATA => $data,
        ];
    }
}
