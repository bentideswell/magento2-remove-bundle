<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Bundle\Helper\Catalog\Product;

use Magento\Catalog\Model\Product\Configuration\Item\ItemInterface;
use Magento\Catalog\Helper\Product\Configuration\ConfigurationInterface;

/**
 * Helper for fetching properties by product configuration item
 * @api
 * @since 100.0.2
 */
class Configuration extends \Magento\Framework\App\Helper\AbstractHelper implements ConfigurationInterface
{
    /**
     * Get selection quantity
     *
     * @param \Magento\Catalog\Model\Product $product
     * @param int $selectionId
     * @return float
     */
    public function getSelectionQty(\Magento\Catalog\Model\Product $product, $selectionId)
    {
        return 0;
    }

    /**
     * Obtain final price of selection in a bundle product
     *
     * @param ItemInterface $item
     * @param \Magento\Catalog\Model\Product $selectionProduct
     * @return float
     */
    public function getSelectionFinalPrice(ItemInterface $item, \Magento\Catalog\Model\Product $selectionProduct)
    {
        return 0.00;
    }

    /**
     * Get bundled selections (slections-products collection)
     *
     * Returns array of options objects.
     * Each option object will contain array of selections objects
     *
     * @param ItemInterface $item
     * @return array
     */
    public function getBundleOptions(ItemInterface $item)
    {
        return [];
    }

    /**
     * Retrieves product options list
     *
     * @param ItemInterface $item
     * @return array
     */
    public function getOptions(ItemInterface $item)
    {
        return [];
    }
}
