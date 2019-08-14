<?php
/**
 *
 * Version :- 1.7
 * Edition :- community
 * Developed By :- Raj Kumar
 * 
 */
class Ktree_Zoom_Helper_Data extends Mage_Core_Helper_Abstract
{
   public function getConfigData($node)
    {
        return Mage::getStoreConfig(sprintf('zoom/general/%s', $node));
    }

    /**
     * @param string $node
     * @return bool
     */
    public function getConfigFlag($node)
    {
        return (bool) Mage::getStoreConfig(sprintf('zoom/general/%s', $node));
    } 
}
