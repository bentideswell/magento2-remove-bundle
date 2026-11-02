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
    
    /**
     * Get option id
     *
     * @return int|null
     */
    public function getOptionId()
    {
        return null;
    }
    
    /**
     * Set option id
     *
     * @param int $optionId
     * @return $this
     */
    public function setOptionId($optionId)
    {
        return $this;
    }
    
    /**
     * Get option title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return null;
    }
    
    /**
     * Set option title
     *
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        return $this;
    }
    
    /**
     * Get is required option
     *
     * @return bool|null
     */
    public function getRequired()
    {
        return null;
    }
    
    /**
     * Set whether option is required
     *
     * @param bool $required
     * @return $this
     */
    public function setRequired($required)
    {
        return $this;
    }
    
    /**
     * Get input type
     *
     * @return string|null
     */
    public function getType()
    {
        return null;
    }
    
    /**
     * Set input type
     *
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        return $this;
    }
    
    /**
     * Get option position
     *
     * @return int|null
     */
    public function getPosition()
    {
        return null;
    }
    
    /**
     * Set option position
     *
     * @param int $position
     * @return $this
     */
    public function setPosition($position)
    {
        return $this;
    }
    
    /**
     * Get product sku
     *
     * @return string|null
     */
    public function getSku()
    {
        return null;
    }
    
    /**
     * Set product sku
     *
     * @param string $sku
     * @return $this
     */
    public function setSku($sku)
    {
        return $this;
    }
    
    /**
     * Get product links
     *
     * @return \Magento\Bundle\Api\Data\LinkInterface[]|null
     */
    public function getProductLinks()
    {
        return null;
    }
    
    /**
     * Set product links
     *
     * @param \Magento\Bundle\Api\Data\LinkInterface[] $productLinks
     * @return $this
     */
    public function setProductLinks(?array $productLinks = null)
    {
        return $this;
    }
    
    /**
     * Retrieve existing extension attributes object or create a new one.
     *
     * @return \Magento\Bundle\Api\Data\OptionExtensionInterface|null
     */
    public function getExtensionAttributes()
    {
        return null;
    }
    
    /**
     * Set an extension attributes object.
     *
     * @param \Magento\Bundle\Api\Data\OptionExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(\Magento\Bundle\Api\Data\OptionExtensionInterface $extensionAttributes)
    {
        return $this;
    }

}
