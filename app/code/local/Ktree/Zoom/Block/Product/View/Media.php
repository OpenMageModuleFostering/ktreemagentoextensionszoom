<?php
/**
 * Cloud Image Zoom - Magento Extension
 *
 * @package     CloudZoom
 * @category    Ktree
 * @copyright   Copyright 2012 Ktree Inc. (http://www.ecommerce-team.com)
 * @version:    1.1.4
 */

class Ktree_Zoom_Block_Product_View_Media extends Mage_Catalog_Block_Product_View_Media
{
    /** @var Ktree_CloudZoom_Helper_Data */
    protected $_helper;

    /**
     * Retrieve extension helper
     *
     * @return Ktree_CloudZoom_Helper_Data
     */
    public function getLocalHelper()
    {
        if (is_null($this->_helper)) {
            $this->_helper = Mage::helper('zoom');
        }
        return $this->_helper;
    }

    /**
     * @return Ktree_CloudZoom_Block_Product_View_Media
     */
    protected function _beforeToHtml(){
        if ($this->getLocalHelper()->getConfigFlag('enabled')) {
            $this->setTemplate('ktree/zoom/catalog/product/view/media.phtml');
        }
        return $this;
    }
}
