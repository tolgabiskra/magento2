<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Mage
 * @package     Mage_Backend
 * @copyright   Copyright (c) 2012 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Mage_Backend_Model_Config_Structure_Search_Proxy implements Mage_Backend_Model_Config_Structure_SearchInterface
{
    /**
     * Object manager
     * @var Magento_ObjectManager
     */
    protected $_objectManager;

    /**
     * @var Mage_Backend_Model_Config_Structure
     */
    protected $_subject;

    /**
     * @param Magento_ObjectManager $objectManager
     */
    public function __construct(Magento_ObjectManager $objectManager)
    {
        $this->_objectManager = $objectManager;
    }

    /**
     * Retrieve subject
     *
     * @return Mage_Backend_Model_Config_Structure_SearchInterface
     */
    protected function _getSubject()
    {
        if (!$this->_subject) {
            $this->_subject = $this->_objectManager->get('Mage_Backend_Model_Config_Structure');
        }
        return $this->_subject;
    }

    /**
     * Find element by path
     *
     * @param string $path
     * @return Mage_Backend_Model_Config_Structure_ElementInterface|null
     */
    public function getElement($path)
    {
        return $this->_getSubject()->getElement($path);
    }
}
