<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Bundle\Model\Product;

class Type extends \Magento\Catalog\Model\Product\Type\AbstractType
{
    /**
     * Product type
     */
    const TYPE_CODE = 'bundle';

    /**
     * Product is composite
     *
     * @var bool
     */
    protected $_isComposite = true;

    /**
     * Delete data specific for Bundle product type
     *
     * @param \Magento\Catalog\Model\Product $product
     * @return void
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    // @codingStandardsIgnoreStart
    public function deleteTypeSpecificData(\Magento\Catalog\Model\Product $product)
    {
    }
}
