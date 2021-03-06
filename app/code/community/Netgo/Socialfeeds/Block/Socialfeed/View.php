<?php
/**
 * Netgo_Socialfeeds extension
 * 
 * NOTICE OF LICENSE
 * 
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 * 
 * @category       Netgo
 * @package        Netgo_Socialfeeds
 * @copyright      Copyright (c) 2015
 * @license        http://opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Socialfeed view block
 *
 * @category    Netgo
 * @package     Netgo_Socialfeeds
 * @author      Ultimate Module Creator
 */
class Netgo_Socialfeeds_Block_Socialfeed_View extends Mage_Core_Block_Template
{
    /**
     * get the current socialfeed
     *
     * @access public
     * @return mixed (Netgo_Socialfeeds_Model_Socialfeed|null)
     * @author Ultimate Module Creator
     */
    public function getCurrentSocialfeed()
    {
        return Mage::registry('current_socialfeed');
    }
}
