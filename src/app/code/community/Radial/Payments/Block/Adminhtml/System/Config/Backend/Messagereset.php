<?php

class Radial_Payments_Block_Adminhtml_System_Config_Backend_Messagereset extends Mage_Adminhtml_Block_System_Config_Form_Field
{
        protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
        {
                $this->setElement($element);
                $url = Mage::helper('adminhtml')->getUrl('radial_payments/adminhtml/messageReset');

                $html = $this->getLayout()->createBlock('adminhtml/widget_button')
                    ->setType('button')
                    ->setClass('scalable')
                    ->setLabel('Reset Payment Messages at Max Transmission')
                    ->setOnClick("setLocation('$url')")
                    ->toHtml();

                return $html;
        }
}
