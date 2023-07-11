<?php
/**
 *
 */
namespace Magento\Bundle\Ui\DataProvider\Product\Listing\Collector;

use Magento\Catalog\Ui\DataProvider\Product\ProductRenderCollectorInterface;
use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Catalog\Api\Data\ProductRenderInterface;

class BundlePrice implements ProductRenderCollectorInterface
{
    /**
     * @const string
     */
    const PRODUCT_TYPE = "bundle";

    /**
     *
     */
    public function collect(ProductInterface $product, ProductRenderInterface $productRender)
    {
        return;
    }
}
