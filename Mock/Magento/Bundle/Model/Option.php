<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Bundle\Model;

class Option extends \Magento\Framework\Model\AbstractExtensibleModel implements
    \Magento\Bundle\Api\Data\OptionInterface
{
    /**#@+
     * Constants
     */
    const KEY_OPTION_ID = 'option_id';
    const KEY_TITLE = 'title';
    const KEY_REQUIRED = 'required';
    const KEY_TYPE = 'type';
    const KEY_POSITION = 'position';
    const KEY_SKU = 'sku';
    const KEY_PRODUCT_LINKS = 'product_links';
    /**#@-*/
}
